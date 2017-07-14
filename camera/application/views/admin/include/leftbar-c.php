
               <div class="col-md-4">
                   <div id="rule" class="panel panel-info">
                     <div class="panel-heading"><?=$lhead; ?></div>
                     <div class="panel-body">
                        <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
                        <?php foreach($rule as $id => $data): ?>
                           <div class="panel panel-info">
                              <div id="heading<?=$data->aid; ?>" role="tab" class="panel-heading">
                                 <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$data->aid; ?>" aria-expanded="<?=($id==0) ? 'true' : 'false'; ?>" aria-controls="collapse<?=$data->aid; ?>"><?=$data->topic; ?></a>
                                 </h4>
                              </div>
                              <div id="collapse<?=$data->aid; ?>" role="tabpanel" aria-labelledby="heading<?=$data->aid; ?>" class="panel-collapse collapse <?=($id==0) ? 'in' : 'out'; ?>">
                                 <div class="panel-body"><?=$data->message; ?></div>
                              </div>
                           </div>
                        <?php endforeach; ?>
                        </div>
                     </div>
                  </div>
               </div>