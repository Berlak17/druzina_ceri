<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <div class="container p-2 m-3 fs-4 text-start text-break">
        <p><span class="fw-bold">Ime in priimek: </span><?php echo $izpis['ime'].' '.$izpis['priimek'];?></p>
        <p><span class="fw-bold">Telefon: </span><?php echo $izpis['telefon']?></p>
        <p><span class="fw-bold">Naslov: </span><?php echo $izpis['naslov'].' '.$izpis['mesto'];?></p>
        <p><span class="fw-bold">Pošta: </span><?php echo $izpis['fk_posta'].' '.$izpis['mesto'];?></p>
        <p><span class="fw-bold">Naslov podjetja: </span><?php echo $izpis['naslov_podjetja'].' '?></p>
        <p><span class="fw-bold">Se strinja: </span><?php echo $izpis['se_strinja'].'';?></p>
        

    </div>
</div>