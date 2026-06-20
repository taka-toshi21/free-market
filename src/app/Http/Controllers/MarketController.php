<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Item;
use App\Models\Purchase;
use App\Http\Requests\PurchaseRequest;
use App\Http\Requests\addressRequest;
use App\Http\Requests\ExhibitionRequest;

class MarketController extends Controller
{
    //商品一覧ページ表示
    public function market(){
        $query = Item::query()->with('purchase');
        if(Auth::check()){
            $query->where('user_id', '!=', Auth::id());
        }
        $Items = $query->get();

        if(Auth::check()){
            $likes = Auth::user()->likedItems()->get();
        }else {
            $likes = collect();
        }

        return view('market', compact('Items', 'likes'));
    }


    //会員登録ページ表示
    public function register(){
        return view('register');
    }


    //ログインページ表示
    public function login(){
        return view('login');
    }


    //マイページ表示
    public function mypage(){
        $user = Auth::user();
        $sellItems = $user->items;
        $buyItems = Purchase::with('item')->where('user_id', auth()->id())->get();
        return view('mypage', compact('user', 'sellItems', 'buyItems'));
    }


    //プロフィール画面表示
    public function profile(){
        return view('profile');
    }


    //プロフィール更新
    public function update(Request $request){
        $user = auth()->user();
        $data = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'postal' => ['nullable', 'string', 'max:255'],
        'address' => ['nullable', 'string', 'max:255'],
        'building' => ['nullable', 'string', 'max:255'],
        ]);
        $user->update($data);
        return redirect('/mypage');
    }


    //出品ページ表示
    public function sell(){
        $categories = Category::all();
        return view('sell', compact('categories'));
    }


    //出品登録
    public function store(ExhibitionRequest $request){
        $item = new Item(
            $request -> only(['image', 'status', 'name', 'brand', 'description', 'price'])
        );

        $item->user_id = auth()->id();
        $item->save();

        $item->categories()->sync($request->categories);

        return redirect('/mypage');
    }


    //商品詳細ページ表示
    public function detail($item_id){
        $item = Item::find($item_id);
        return view('itemDetail', compact('item'));
    }


    //商品購入ページ表示
    public function purchase($item_id){
        $item = Item::find($item_id);
        return view('purchase', compact('item'));
    }

    //商品購入登録
    public function buy(PurchaseRequest $request, $item_id){
        Purchase::create([
            'item_id' => $item_id,
            'user_id' => Auth::id(),
            'payment' => $request->payment,
            'destination' => session('purchase_postal', Auth::user()->postal)
                            .' '
                            .session('purchase_address', Auth::user()->address)
                            .' '
                            .session('purchase_building', Auth::user()->building),
        ]);

        return redirect('/mypage?page=buy');
    }

    //購入商品送り先住所変更ページ表示
    public function address($item_id){
        $item = Item::find($item_id);
        return view('address', compact('item'));
    }

    //購入商品送り先住所更新処理
    public function destination(AddressRequest $request, $item_id){
        session([
            'purchase_postal' => $request->postal,
            'purchase_address' => $request->address,
            'purchase_building' => $request->building,
        ]);

        return redirect('/purchase/' . $item_id);
    }
}
