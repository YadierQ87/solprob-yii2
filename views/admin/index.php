<?php
/* @var $this yii\web\View */
use yii\bootstrap\Html;

?>
<h1>admin/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>



<?php $list_modules = [
    ["name"=>'Blog Post',"location"=>"/blog-posts"],
    ["name"=>'Provincias',"location"=>"/loc-provincia"],
    ["name"=>'Municipios ',"location"=>"/loc-municipios"],
    ["name"=>'Localidades ',"location"=>"/loc-localidades"],
    ["name"=>'Post Catalogo',"location"=>"/post-catalogo"],
    ["name"=>'Catalogo-Servicio ',"location"=>"/sp-catalogo-service"],
    ["name"=>'Categorias ',"location"=>"/sp-categoria"],
    ["name"=>'Clientes ',"location"=>"/sp-cliente"],
    ["name"=>'Contratos ',"location"=>"/sp-contrato"],
    ["name"=>'Niveles de Contratos ',"location"=>"/sp-nivel-contrato"],
    ["name"=>'User-Author ',"location"=>"/sec-user-author"],
];?>

<div class="row">
    <?php
    foreach($list_modules as $key){
        echo "<div class='col-md-3 card' style='padding: 10px;margin: 10px'>
				<h4 class='main-color'> Module {$key["location"]}</h4>
				<span class='btn btn-primary btn-sm'> <i class='fa fa-edit'></i>";
		echo Html::a($key["name"], [$key["location"],], ['class' => 'white']) ;
        echo "</span></div>";
    }
    ?>
</div>

