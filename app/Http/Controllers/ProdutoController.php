<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{

    public function index() {
        $produto = Produto::where('status', '=', true)->get();
        return view('produtos.index', compact(['produto']));
    }

    public function create() {
        $produto = Produto::all();
        return view('produtos.create', compact('produto'));
    }

    public function store(Request $request) {
        $produto = new Produto();
        $produto->nome = $request->input('nome');
        $produto->quantidade = $request->input('quantidade');
        $produto->save();

        return redirect()->route('produtos.index', compact('produto'));
    }

    public function show($id) {
        $produto = Produto::where('id', $id)->first();
        return view('produtos.show', compact(['produto']));
    }

    public function edit($id) {
        $produto = Produto::find($id);
        if (isset($produto)) {
            return view('produtos.edit', compact('produto'));
        }
        return view('produtos.index');
    }

    public function update(Request $request, $id) {
        $produto = Produto::find($id);
        if (isset($produto)) {
            $produto->nome = $request->input('nome');
            $produto->quantidade = $request->input('quantidade');
            $produto->save();
        }
        return redirect()->route('produtos.index', compact('produto'));
    }

    public function destroy(Request $request, $id) {
        $produto = Produto::find($id);
        if (isset($produto)) {
            $produto->status = false;
            $produto->save();
        }
        return redirect()->route('produtos.index', compact('produto'));
    }
}
