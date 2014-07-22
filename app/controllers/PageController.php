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
		$pagina = Input::get('pagina');
        $slug = $this->setSlug($pagina);
        $texto = Input::get('texto');
        $estado = Input::get('estado');
		$etiquetas = Input::get('etiquetas');
		$idUsuario = Input::get('idUsuario');

		$insertedId = DB::table('pagina')
		              ->insertGetId( array('Pagina' => $pagina,
		              	                   'slug' => $slug,
		              	                   'texto' => $texto,
		              	                   'Estado' => $estado,
		              	                   'Etiquetas' => $etiquetas,
		              	                   'IdUsuario' => $idUsuario) );
		return $insertedId ? $insertedId : '0';
	}

	private function setSlug($text)
	{
		// replace non letter or digits by -
	    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

	    // trim
	    $text = trim($text, '-');

	    // transliterate
	    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

	    // lowercase
	    $text = strtolower($text);

	    // remove unwanted characters
	    $text = preg_replace('~[^-\w]+~', '', $text);
        
        //$text = str_replace(' ', '-', trim(Input::get('pagina')));
		$text = str_replace(',', '-', $text);
		$text = str_replace('.', '', $text);
		$text = str_replace("'", "", $text);
        $text = str_replace('"', '', $text);
        $text = str_replace('?', '', $text);
        $text = str_replace('!', '', $text);
        $text = str_replace('¿', '', $text);
        $text = str_replace('%', 'porciento', $text);

        $space_chars = array(
		  " ", // space
		  "…", // ellipsis
		  "–", // en dash
		  "—", // em dash
		  "/", // slash
		  "\\", // backslash
		  ":", // colon
		  ";", // semi-colon
		  ".", // period
		  "+", // plus sign
		  "#", // pound sign
		  "~", // tilde
		  "_", // underscore
		  "|", // pipe
		 );
		 
		foreach($space_chars as $char){
		    $text = str_replace($char, '-', $text); // Change spaces to dashes
		}

	    if (empty($text))
	    {
	        return 'n-a';
	    }

	    return strtolower($text);
	}

	public function edit($idPage)
	{
		$page = DB::table('pagina')
		         ->where('IdPagina', '=', $idPage)
		         ->first();

		return View::make('admin.page.edit')
		             ->with('title', 'Editar pagina')
		             ->with('page', $page);
	}

	public function delete($idPage)
	{
		$deleteResult = DB::table('pagina')
		                    ->where('IdPagina', '=', $idPage)
		                    ->delete();

	    if ( $deleteResult )
	    	return Redirect::to('admin/paginas');
	}
}
?>