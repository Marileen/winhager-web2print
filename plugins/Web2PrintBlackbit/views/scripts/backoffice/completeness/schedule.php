<div class="modal " id="schedule_modal" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?=$this->ts('backoffice_complteness_schedule')?></h4>
            </div>
            <div class="modal-body">
                <form class="form-inline" id="schedule_form" action="/plugin/Windhager/Backoffice_Completeness/schedule">
                    <div class="form-group form-inline">
                        <label for="nextReminderDate"><?=$this->ts('backoffice_completeness_schedule_label')?></label>
                        <div class="datepicker-wrapper">
                            <?php
                            $e = \Pimcore\Db::get()->fetchRow('SELECT * FROM windhager_completeness_schedule WHERE o_id = ? AND role = ?',[$this->getParam('o_id'),$this->getParam('role')]);
                            if($e){
                                $date = \Carbon\Carbon::createFromTimestamp($e['date']);
                                $value =  $date->format('d.m.Y');
                            }else{
                                $value = '';
                            }

                            ?>

                            <input type="text" class="form-control datepicker" required="required" id="date" name="date" value="<?=$value?>" placeholder="">
                            <span class="glyphicon glyphicon-calendar" style="position: relative;left:-25px;top:2px;"></span>
                        </div>
                        <small class="note"><?=$this->ts('backoffice_completeness_schedule_note')?></small>
                    </div>
                    <input type="hidden" name="role" value="<?=$this->getParam('role')?>"/>
                    <input type="hidden" name="o_id" value="<?=$this->getParam('o_id')?>"/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?=$this->ts('backoffice_completeness_schedule_cancel')?></button>
                <button type="button" class="btn btn-primary" id="applySchedule"><?=$this->ts('backoffice_completeness_schedule_save')?></button>
            </div>
        </div>
    </div>
</div>