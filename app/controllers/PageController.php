<?php
class PageController extends BaseController
{
    public function index()
    {
    	$pages = DB::table('pagina')
                    ->get();
        

		return View::make('admin.page.index')
		             ->with('title','Paginas')
		             ->with('pages', $pages);
    }

	public function showPage($slug)
	{
        $page = DB::table('pagina')
                    ->where('slug', '=', $slug)
                    ->first();

        if (!is_null($page)) {
            return View::make('site.page')
                        ->with('page', $page);
        } else {
            App::abort(404);
        }
	}

	public function create()
	{
		return View::make('admin.page.create')
		             ->with('title', 'Crear nuevo &aacute;rticulo');
	}

	public function save()
	{
		$page = Input::get('pagina');
		$slug = str_replace(' ', '-', trim(Input::get('pagina')));
		$slug = str_replace(',', '-', $slug);
		$slug = str_replace('.', '', $slug);
		$slug = str_replace("'", "", $slug);
        $slug = str_replace('"', '', $slug);
        $slug = str_replace('?', '', $slug);
        $slug = str_replace('!', '', $slug);
        $slug = str_replace('%', 'porciento', $slug);
        $texto = Input::get('texto');
        $estado = Input::get('estado');
		$etiquetas = Input::get('etiquetas');
		$idUsuario = Input::get('idUsuario');

		$insertedId = DB::table('pagina')
		              ->insertGetId( array('Pagina' => $pagina,
		              	                   'slug' => $slug,
		              	                   'texto' => $texto,
		              	                   'Etiquetas' => $etiquetas,
		              	                   'IdUsuario' => $idUsuario) );
		return $insertedId ? '1' : '0';
	}
}
?>