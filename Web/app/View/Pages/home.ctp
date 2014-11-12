<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;
?>
<div id ="leftmenu">
    <h2><?php echo $title_for_layout?></h2>
    <h3>AdHorus</h3>
    <ul>
        <li><?php echo $this->Html->link(__d('cake_dev', 'Origenes de datos'), '/datasources/');?></li>
        <li><?php echo $this->Html->link(__d('cake_dev', 'Usuarios'), '/users/');?></li>
        <li><?php echo $this->Html->link(__d('cake_dev', 'Webs'), '/webs/');?></li>
        <li><?php echo $this->Html->link(__d('cake_dev', 'Signos'), '/signs/');?></li>
        <li><?php echo $this->Html->link(__d('cake_dev', 'Predicciones'), '/predictions/');?></li>
    </ul>
</div>
<div id="rightcontent">

<h3>
    ADHorus. Aplicación de consulta de Horóscopos de distintos orígenes de datos.
</h3>
<h4>
    Con ADHorus puedes:
</h4>
<ul>
    <li>Obtener tus predicciones para tu signo zodiacal de varias revistas, periódicos o webs</li>
    <li>Registrar valoraciones para obtener las predicciones mas valoradas</li>

</ul>    
</div>
