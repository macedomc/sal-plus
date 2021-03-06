<div class="related">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Ocorrências Relacionadas</h4>    
    <?php if (!empty($currentModel['Ocorrencia'])):?>
        <section id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">    
            <tr>
                <th>Data</th>
                <th>Contrato</th>
                <th>Tipo</th>
                <th class="actions">Ações</th>
            </tr>
            </thead>
            <?php foreach ($currentModel['Ocorrencia'] as $ocorrencia): ?>
                <tr>
                    <td data-title="Data"><?php echo $ocorrencia['dt_ocorrencia'];?></td>
                    <td data-title="Contrato"><?php echo $contratos[$ocorrencia['contrato_id']];?></td>
                    <td data-title="Tipo"><?php echo $tipoocorrencias[$ocorrencia['tipoocorrencia_id']];?></td>
                    <td class="actions">
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Selecione <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><?php echo $this->Html->link("Consultar", array('controller' => 'ocorrencias', 'action' => 'view', $ocorrencia['id']),array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link("Editar", array('controller' => 'ocorrencias', 'action' => 'edit', $ocorrencia['id']),array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link("Excluir", array('controller' => 'ocorrencias', 'action' => 'delete', $ocorrencia['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $ocorrencia['id'])); ?></li>
                          </ul>
                        </div>                        
                    </td>
                </tr>
            <?php endforeach; ?>
            </table>
        </section>
    <?php endif; ?>
    </div><!-- /content-panel -->
    </div><!-- /col-lg-4 -->			
    </div><!-- /row -->              
    <div class="related-actions">
    <?php echo $this->Html->link(__('Nova Ocorrência', true), array('controller' => 'ocorrencias', 'action' => 'add'),array('class'=>'btn btn-primary'));?> </li>
    </div>
</div>        