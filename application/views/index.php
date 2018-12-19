
<style>
    .formregis{
        border: solid rgba(29,250,51,0.5) 1px;
        padding: 15px;
        box-shadow: 5px 5px rgba(29,250,51,0.8);
        margin: auto;

    }
    .btn-submit{
        box-shadow: 5px 5px rgba(29,250,51,0.8);
    }
</style>
    <div class="container" style="margin-top: 15px">
        <h3 align="center">กรอกชื่อผู้ที่ต้องการทดสอบ</h3>
        <form action="<?php echo base_url('InsertData/insertcustomer')?>" method="POST">
        <div class="row formregis">
            <div class="col-md-12">
                <div class="form-group">
                    <label> ชื่อ </label>
                    <input type="text" class="form-control" name="username">
                </div>

                <div class="form-group">
                    <label>นามสกุล</label>
                    <input type="text" class="form-control" name="lastname">
                </div>
                <div class="form-group">
                    <label> เบอร์โทร </label>
                    <input type="text" class="form-control" name="phone">
                </div>
                <button type="submit" class="btn btn-success form-control btn-submit">จัดเก็บข้อมูล</button>
            </div>
        </div>
        </form>
    </div>
