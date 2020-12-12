<h1>ГОРОДА</h1>

<?if (is_array($arResult)):?>
    <?foreach($arResult as $ss):?>
<div><?=$ss['NAME']?><a href="?city=<?=$ss['ID']?>">удалить</a><div><?=$ss['TEXT']?></div></div>
    <?endforeach;?>
<?endif;?>