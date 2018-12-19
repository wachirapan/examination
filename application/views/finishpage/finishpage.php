<style>
    .form-total{
        border : solid 1px rgba(252,76,76,0.5) ;
        box-shadow: 5px 5px rgba(252,76,76,0.8);
        padding: 25px;
        margin: auto;

    }
</style>
<div class="container" style="margin-top: 15px">
    <div class="row form-total">
        <div class="col-md-12">
            <h3 align="center">สรุปคะแนนที่คุณทำได้</h3>
            <?php
            $sumtotal = 0 ;
            foreach ($sum as $item) {
                $sumtotal = $sumtotal + $item->ans_score ;
            }
            echo "<h4 align='center'>".$sumtotal." คะแนน </h4>";?>
        </div>
    </div>
</div>