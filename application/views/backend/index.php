<div class="row" id="form-question">
    <div class="col-md-8">
        <table class="table">
            <tr>
                <td>ลำดับ</td>
                <td>หัวข้อคำถาม</td>
                <td>คำตอบ</td>
                <td>แก้ไข/ลบ</td>
            </tr>
            <tbody>
            <?php
            $num = 1 ;
            foreach($blogs as $item){?>
            <tr>
                <td><?=$num ; ?></td>
                <td><?=$item->quest_text?></td>
                <td><i @click="looklikeanswer(<?=$item->quest_id ;?>);" class="fa fa-align-justify" style="font-size: 20px; " data-target="#looklike" data-toggle="modal"></i></td>
                <td>
                    <i @click="setedit(<?=$item->quest_id ;?>);" class="fa fa-paste" style="font-size: 20px; color: #00aeef;"></i> |
                    <i @click="deletedata(<?=$item->quest_id ;?>);" class="fa fa-scissors" style="font-size: 20px; color: red;"></i>
                </td>
            </tr>
            <?php $num++ ; }?>
            </tbody>
        </table>

        <p> <?=$links?></p>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>โจทย์คำถาม</label>
            <input type="text" class="form-control" v-model="question">
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>คำตอบ A</label>
                    <input type="text" class="form-control" v-model="questionA">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>คะแนน A</label>
                    <input type="text" class="form-control" v-model="scoreA">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>คำตอบ B</label>
                    <input type="text" class="form-control" v-model="questionB">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>คะแนน B</label>
                    <input type="text" class="form-control" v-model="scoreB">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>คำตอบ C</label>
                    <input type="text" class="form-control" v-model="questionC">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>คะแนน C</label>
                    <input type="text" class="form-control" v-model="scoreC">
                </div>
            </div>
        </div>
        <button id="btninsert" class="btn btn-success" @click="insertdata();">จัดเก็บ</button>
        <button id="btnupdate" class="btn btn-info" @click="updatedata();">แก้ไข</button>
    </div>

    <!-- modal -->
    <div class="modal" id="looklike">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">คำตอบที่สร้าง</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <table class="table">
                        <tr v-for="item in answerdata">
                            <td>คำตอบ</td>
                            <td>{{item.ans_text}}</td>
                            <td>คะแนน</td>
                            <td>{{item.ans_score}}</td>
                        </tr>
                    </table>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- endmodal -->
</div>
<script>
    $('#btnupdate').hide();
    new Vue({
        el : "#form-question",
        data : {
            questid : "",
            question : "",
            questionA : "",
            questionB : "",
            questionC : "",
            scoreA : "",
            scoreB : "",
            scoreC : "",
            answerdata:[],
            pkA : "",
            pkB : "",
            pkC : ""
        },
        mounted : function(){

        },
        methods : {
            insertdata (){
                if(this.question == "" || this.questionA == "" || this.questionB == "" || this.questionC == "" || this.scoreA == "" || this.scoreB == "" || this.scoreC ==""){
                    alert("กรุณากรอกข้อมูลให้ครบด้วยค่ะ");
                }else {
                    $.post("<?php echo base_url('InsertData/insertquestion')?>", {
                        question: this.question,
                        questionA: this.questionA,
                        questionB: this.questionB,
                        questionC: this.questionC,
                        scoreA: this.scoreA,
                        scoreB: this.scoreB,
                        scoreC: this.scoreC
                    });
                    window.location.reload();
                }
            },
            looklikeanswer(questid){
                var self = this ;
                $.getJSON("<?php echo base_url('GenAPI/lookanwser?questid=')?>"+questid,function(data){
                    console.log(data);
                    self.answerdata = data ;
                });
            },
            setedit(questid){
                $('#btnupdate').show();
                $('#btninsert').hide();
                var ans = [];
                var score = [];
                var pkaws = [];
                this.questid = questid ;
                var self = this ;
                $.getJSON("<?php echo base_url('GenAPI/editquestion?questid=')?>"+questid, function (data) {
                    $.each(data, function (k,v) {
                        self.question = v['quest_text'];
                        ans.push(v['ans_text']);
                        score.push(v['ans_score']);
                        pkaws.push(v['ans_id']);
                    });
                    self.questionA = ans[0];
                    self.questionB = ans[1];
                    self.questionC = ans[2];
                    self.scoreA = score[0];
                    self.scoreB = score[1];
                    self.scoreC = score[2];
                    self.pkA = pkaws[0] ;
                    self.pkB = pkaws[1] ;
                    self.pkC = pkaws[2] ;

                });
            },
            updatedata(){
                $.post("<?php echo base_url('UpdateData/updatequestion')?>",{questid:this.questid, question:this.question, questionA:this.questionA
                    ,questionB:this.questionB,questionC:this.questionC, scoreA:this.scoreA, scoreB:this.scoreB, scoreC:this.scoreC,
                    pkA:this.pkA, pkB:this.pkB, pkC:this.pkC});
                window.location.reload();

            },
            deletedata(questid)
            {
                var con = confirm("คุณต้องการลบข้อมูลนี้ใช้หรือไม่");
                if(con == true){
                    $.post("<?php echo base_url('DeleteData/delquestion')?>",{questid:questid});
                    window.location.reload();
                }
            }
        }
    });
</script>

