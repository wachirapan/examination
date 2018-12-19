<style>
    .form-data{
        border: solid red 1px;
        border-radius: 5px;
        padding: 15px;
        margin: auto;
        box-shadow: 5px 5px rgba(255,50,50,0.8);
    }
</style>
<div class="container" id="form-customer" style="margin-top: 15px">
    <div class="row form-data">
        <form>
        <div class="col-md-12">
            <?php foreach($blogs as $item){?>
            <h3><?=$this->uri->segment(3)."/".$item->quest_text?></h3>
                <?php $query =  $this->db->select('*')->from('answer')->where('answer.quest_id',$item->quest_id)->get();
                foreach($query->result() as $ans){ ?>
                    <input type="hidden" id="questid" value="<?=$item->quest_id?>">
                    <input type="radio" name="ansscore" value="<?=$ans->ans_id?>" @click="checkconfirm();"> <?=$ans->ans_text?><br>
              <?php  }?>
            <?php }?>
        </div>
    </div>
    </form>
    <div class="row">
        <div class="col-md-6">
            <p><?=$links?></p>
        </div>
        <div class="col-md-6" style="margin-top: 18px ;">
            <a href="<?php echo base_url('UpdateData/customtestfinish')?>"><button class="btn btn-danger">ยืนยันการส่ง</button></a>
        </div>
    </div>

</div>
<script>
    new Vue({
        el : "#form-customer",
        data : {

        },
        mounted : function () {
            $.getJSON("<?php echo base_url('GenAPI/ansforcustomer?questid=')?>"+$('#questid').val(), function (data) {
                $.each(data, function (k,v) {
                    $("input[name='ansscore'][value='"+v['ans_id']+"']").prop('checked', true);
                });
            });
        },
        methods : {
            checkconfirm(){
                $.post("<?php echo base_url('InsertData/insertanscustomer')?>",{questid:$('#questid').val(),
                    ansid:$("input[name='ansscore']:checked").val()});
                window.location.reload();
            }
        }

    })
</script>
