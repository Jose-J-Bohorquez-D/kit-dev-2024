<?php 

	class Landing
	{

		public function __construct()
		{

		}

		public function main()
		{
			require_once "Vistas/Landing/Modulos/dep.php";
			require_once "Vistas/Landing/Modulos/navSup.php";
			require_once "Vistas/Landing/Modulos/cambioTema.php";			
			require_once "Vistas/Landing/Modulos/hero.php";
			require_once "Vistas/Landing/Paginas/contenidos.php";
			require_once "Vistas/Landing/Modulos/footer.php";
		}

	}

 ?>