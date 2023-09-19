<?php

namespace App\Http\Controllers;

use App\Exports\ExportName;
use App\Models\Categoria;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Libro;
use mysql_xdevapi\Exception;
use Excel;


class Controller extends BaseController
{

    function main(){
        return view('main');
    }
    function index()
    {

        $items = Libro::all();
        return view('list', compact('items'));
    }

    function indexl()
    {

        $items = Libro::orderBy('autor', 'asc')->paginate(5);
        return view('libros', compact('items','items'));

    }

    function list(){
        $items = Libro::all();
        return view('list', compact('items'));
    }

    function public(){
        $items = Libro::all();
        return view('listp', compact('items'));
    }

    function indexg(){

        $items = Categoria::orderBy('nombre','asc')->paginate(5);
        return view('categorias',compact('items'));
    }



    function add()
    {
        $categoriaitem = Categoria::all();
        return view('add',compact('categoriaitem'));
    }

    function store(Request $request)
    {
        try{
            $libro = new Libro();
            $libro->id = $request->post('id');
            $libro->nombre = $request->post('nombre');
            $libro->autor = $request->post('autor');
            $libro->categoria_id = $request->post('categoria_id');

            $libro->save();
        }
        catch (\Exception $exception){
            return redirect()->route("librosview")->with("title","Error: Ha creado un libro con el mismo codigo, este debe ser unico");
        }
        return redirect()->route("librosview")->with("success", "Agregado con exito!");

    }

    function storeC (Request $request)
    {
        try {
            $categoria = new Categoria();
            $categoria->id = $request->post('id');
            $categoria->nombre = $request->post('nombre');
            $categoria->save();
        }

        catch (\Exception $exception){
            return redirect()->route("categoriasview")->with("title","Error: Ha creado una categoria con el mismo codigo, este debe ser unico");
        }
        return redirect()->route("categoriasview")->with("success", "Agregado con exito!");

    }

    function addC()
    {
        return view('addC');
    }

    public function delete($id)
    {
        $libros = Libro::find($id);
        $libros->delete();
        return redirect()->route("librosview")->with("success","Eliminado con exito!");

    }

    public function deleteC($id)
    {
        try{
            $categorias = Categoria::find($id);
            $categorias->delete();}
        catch (\Exception $exception){
            return redirect()->route("categoriasview")->with("title","No se puede eliminar esta categoria debido a que ya esta en uso");
        }
        return redirect()->route("categoriasview")->with("success", "Eliminado con exito");

    }

    public function edit($id){
        $categoriaitem = Categoria::all();
        $item = Libro::find($id);
        return view('edit', compact('item', 'categoriaitem'));
    }

    function update(Request $request, $id)
    {
        $item = Libro::find($id);
        $item->nombre = $request->post('nombre');
        $item->autor = $request->post('autor');
        $item->categoria_id = $request->post('categoria_id');
        $item->save();
        return redirect()->route("librosview")->with("success", "Editado con exito!");

    }

    public function editc($id){
        $item = Categoria::find($id);
        return view('editc',compact('item'));
    }

    public function updatec(Request $request, $id){
        $item = Categoria::find($id);
        $item->nombre=$request->post('nombre');
        $item->save();
        return redirect()->route('categoriasview')->with("success", "Editado con exito!");
    }

    public function excel(){


        return Excel::download(new ExportName(), 'libros.xlsx');

    }


    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $items = Libro::where('nombre', 'like', '%' . $searchTerm . '%')
            ->orWhere('autor', 'like', '%' . $searchTerm . '%')
            ->paginate(5);

        return view('libros', ['items' => $items]);
    }

    public function buscar(Request $request)
    {
        $searchTerm = $request->input('search');

        $items = Libro::where('nombre', 'like', '%' . $searchTerm . '%')
            ->orWhere('autor', 'like', '%' . $searchTerm . '%')
            ->paginate(5);

        return view('list', ['items' => $items]);
    }

}
