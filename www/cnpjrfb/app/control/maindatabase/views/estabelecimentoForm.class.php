<?php
/**
 * System generated by SysGen (System Generator with Formdin Framework) 
 * Download SysGenAd: https://github.com/bjverde/sysgenad
 * Download Formdin5 Framework: https://github.com/bjverde/formDin5
 * 
 * SysGen  Version: 0.6.0
 * FormDin Version: 5.0.0
 * 
 * System cnpjrfb2 created in: 2021-11-20 00:51:44
 */

class estabelecimentoForm extends TPage
{

    protected $form; //Registration form Adianti
    protected $frm;  //Registration component FormDin 5
    protected $datagrid; //Listing
    protected $pageNavigation;

    // trait com onReload, onSearch, onDelete, onClear, onEdit, show
    use Adianti\Base\AdiantiStandardFormTrait;
    // trait com onReload, onSearch, onDelete...
    use Adianti\Base\AdiantiStandardListTrait;

    public function __construct()
    {
        parent::__construct();
        // $this->adianti_target_container = 'adianti_right_panel';

        $this->setDatabase('maindatabase'); // define the database
        $this->setActiveRecord('estabelecimento'); // define the Active Record
        $this->setDefaultOrder('CNPJ_BASICO', 'asc'); // define the default order

        $primaryKey = 'CNPJ_BASICO';
        $this->frm = new TFormDin($this,'estabelecimento');
        $frm = $this->frm;
        $frm->enableCSRFProtection(); // Protection cross-site request forgery 
        $frm->addHiddenField( $primaryKey );   // coluna chave da tabela
        $frm->addTextField('CNPJ_ORDEM', 'Cnpj Ordem',4,true,4);
        //$frm->getLabel('CNPJ_ORDEM')->setToolTip('NÚMERO DO ESTABELECIMENTO DE INSCRIÇÃO NO CNPJ (DO NONO ATÉ O DÉCIMO SEGUNDO DÍGITO DO CNPJ).');
        $frm->addTextField('CNPJ_DV', 'Cnpj Dv',2,true,2);
        //$frm->getLabel('CNPJ_DV')->setToolTip('DÍGITO VERIFICADOR DO NÚMERO DE INSCRIÇÃO NO CNPJ (DOIS ÚLTIMOS DÍGITOS DO CNPJ).');
        $frm->addTextField('IDENTIFICADOR_MATRIZ_FILIAL', 'Identificador Matriz Filial',1,true,1);
        //$frm->getLabel('IDENTIFICADOR_MATRIZ_FILIAL')->setToolTip('CÓDIGO DO IDENTIFICADOR MATRIZ/FILIAL:
1 – MATRIZ
2 – FILIAL');
        $frm->addMemoField('NOME_FANTASIA', 'Nome Fantasia',1000,false,80,3);
        //$frm->getLabel('NOME_FANTASIA')->setToolTip('CORRESPONDE AO NOME FANTASIA');
        $frm->addTextField('SITUACAO_CADASTRAL', 'Situação Cadastral',1,true,1);
        //$frm->getLabel('SITUACAO_CADASTRAL')->setToolTip('CÓDIGO DA SITUAÇÃO CADASTRAL:
01 – NULA
2 – ATIVA
3 – SUSPENSA
4 – INAPTA
08 – BAIXADA');
        $frm->addDateTimeField('DATA_SITUACAO_CADASTRAL', 'Data Situação Cadastral',false,null,null,null,null,'dd/mm/yyyy hh:ii',null,null,null,null,'yyyy-mm-dd hh:ii');
        //$frm->getLabel('DATA_SITUACAO_CADASTRAL')->setToolTip('DATA DO EVENTO DA SITUAÇÃO CADASTRAL');
        $controllerMoti = new MotiController();
        $listMoti = $controllerMoti->selectAll();
        $frm->addSelectField('MOTIVO_SITUACAO_CADASTRAL', 'Motivo Situação Cadastral',true,$listMoti,null,null,null,null,null,null,' ',null);
        //$frm->getLabel('MOTIVO_SITUACAO_CADASTRAL')->setToolTip('CÓDIGO DO MOTIVO DA SITUAÇÃO CADASTRAL');
        $frm->addTextField('NOME_CIDADE_EXTERIOR', 'Nome Cidade Exterior',45,false,45);
        //$frm->getLabel('NOME_CIDADE_EXTERIOR')->setToolTip('NOME DA CIDADE NO EXTERIOR');
        $controllerPais = new PaisController();
        $listPais = $controllerPais->selectAll();
        $frm->addSelectField('PAIS', 'Pais',false,$listPais,null,null,null,null,null,null,' ',null);
        //$frm->getLabel('PAIS')->setToolTip('CÓDIGO DO PAIS');
        $frm->addDateTimeField('DATA_INICIO_ATIVIDADE', 'Data Inicio Atividade',false,null,null,null,null,'dd/mm/yyyy hh:ii',null,null,null,null,'yyyy-mm-dd hh:ii');
        //$frm->getLabel('DATA_INICIO_ATIVIDADE')->setToolTip('DATA DE INÍCIO DA ATIVIDADE');
        $controllerCnae = new CnaeController();
        $listCnae = $controllerCnae->selectAll();
        $frm->addSelectField('CNAE_FISCAL_PRINCIPAL', 'Cnae Fiscal Principal',true,$listCnae,null,null,null,null,null,null,' ',null);
        //$frm->getLabel('CNAE_FISCAL_PRINCIPAL')->setToolTip('CÓDIGO DA ATIVIDADE ECONÔMICA PRINCIPAL DO ESTABELECIMENTO');
        $frm->addMemoField('CNAE_FISCAL_SECUNDARIA', 'Cnae Fiscal Secundaria',1000,false,80,3);
        //$frm->getLabel('CNAE_FISCAL_SECUNDARIA')->setToolTip('CÓDIGO DA(S) ATIVIDADE(S) ECONÔMICA(S) SECUNDÁRIA(S) DO ESTABELECIMENTO');
        $frm->addMemoField('TIPO_LOGRADOURO', 'Tipo Logradouro',500,false,80,3);
        $frm->addMemoField('LOGRADOURO', 'Logradouro',1000,false,80,3);
        //$frm->getLabel('LOGRADOURO')->setToolTip('NOME DO LOGRADOURO ONDE SE LOCALIZA O ESTABELECIMENTO.');
        $frm->addTextField('NUMERO', 'Numero',45,false,45);
        //$frm->getLabel('NUMERO')->setToolTip('NÚMERO ONDE SE LOCALIZA O ESTABELECIMENTO. QUANDO NÃO HOUVER PREENCHIMENTO DO NÚMERO HAVERÁ ‘S/N’.');
        $frm->addTextField('COMPLEMENTO', 'Complemento',100,false,100);
        //$frm->getLabel('COMPLEMENTO')->setToolTip('COMPLEMENTO PARA O ENDEREÇO DE LOCALIZAÇÃO DO ESTABELECIMENTO');
        $frm->addTextField('BAIRRO', 'Bairro',45,false,45);
        //$frm->getLabel('BAIRRO')->setToolTip('BAIRRO ONDE SE LOCALIZA O ESTABELECIMENTO.');
        $frm->addTextField('CEP', 'Cep',45,false,45);
        //$frm->getLabel('CEP')->setToolTip('CÓDIGO DE ENDEREÇAMENTO POSTAL REFERENTE AO LOGRADOURO NO QUAL O ESTABELECIMENTO ESTA LOCALIZADO');
        $frm->addTextField('UF', 'Uf',45,false,45);
        //$frm->getLabel('UF')->setToolTip('SIGLA DA UNIDADE DA FEDERAÇÃO EM QUE SE ENCONTRA O ESTABELECIMENTO');
        $controllerMunic = new MunicController();
        $listMunic = $controllerMunic->selectAll();
        $frm->addSelectField('MUNICIPIO', 'Municipio',false,$listMunic,null,null,null,null,null,null,' ',null);
        //$frm->getLabel('MUNICIPIO')->setToolTip('CÓDIGO DO MUNICÍPIO DE JURISDIÇÃO ONDE SE ENCONTRA O ESTABELECIMENTO');
        $frm->addTextField('DDD_1', 'Ddd 1',45,false,45);
        $frm->addTextField('TELEFONE_1', 'Telefone 1',45,false,45);
        $frm->addTextField('DDD_2', 'Ddd 2',45,false,45);
        $frm->addTextField('TELEFONE_2', 'Telefone 2',45,false,45);
        $frm->addTextField('DDD_FAX', 'Ddd Fax',45,false,45);
        $frm->addTextField('FAX', 'Fax',45,false,45);
        $frm->addTextField('CORREIO_ELETRONICO', 'Correio Eletronico',45,false,45);
        $frm->addTextField('SITUACAO_ESPECIAL', 'Situação Especial',45,false,45);
        $frm->addDateTimeField('DATA_SITUACAO_ESPECIAL', 'Data Situação Especial',false,null,null,null,null,'dd/mm/yyyy hh:ii',null,null,null,null,'yyyy-mm-dd hh:ii');

        // O Adianti permite a Internacionalização - A função _t('string') serve
        //para traduzir termos no sistema. Veja ApplicationTranslator escrevendo
        //primeiro em ingles e depois traduzindo
        $frm->setAction( _t('Save'), 'onSave', null, 'fa:save', 'green' );
        $frm->setActionLink( _t('Clear'), 'onClear', null, 'fa:eraser', 'red');

        $this->form = $frm->show();
        $this->form->setData( TSession::getValue(__CLASS__.'_filter_data'));

        $mixUpdateFields = $primaryKey.'|'.$primaryKey
                        .',CNPJ_ORDEM|CNPJ_ORDEM'
                        .',CNPJ_DV|CNPJ_DV'
                        .',IDENTIFICADOR_MATRIZ_FILIAL|IDENTIFICADOR_MATRIZ_FILIAL'
                        .',NOME_FANTASIA|NOME_FANTASIA'
                        .',SITUACAO_CADASTRAL|SITUACAO_CADASTRAL'
                        .',DATA_SITUACAO_CADASTRAL|DATA_SITUACAO_CADASTRAL'
                        .',MOTIVO_SITUACAO_CADASTRAL|MOTIVO_SITUACAO_CADASTRAL'
                        .',NOME_CIDADE_EXTERIOR|NOME_CIDADE_EXTERIOR'
                        .',PAIS|PAIS'
                        .',DATA_INICIO_ATIVIDADE|DATA_INICIO_ATIVIDADE'
                        .',CNAE_FISCAL_PRINCIPAL|CNAE_FISCAL_PRINCIPAL'
                        .',CNAE_FISCAL_SECUNDARIA|CNAE_FISCAL_SECUNDARIA'
                        .',TIPO_LOGRADOURO|TIPO_LOGRADOURO'
                        .',LOGRADOURO|LOGRADOURO'
                        .',NUMERO|NUMERO'
                        .',COMPLEMENTO|COMPLEMENTO'
                        .',BAIRRO|BAIRRO'
                        .',CEP|CEP'
                        .',UF|UF'
                        .',MUNICIPIO|MUNICIPIO'
                        .',DDD_1|DDD_1'
                        .',TELEFONE_1|TELEFONE_1'
                        .',DDD_2|DDD_2'
                        .',TELEFONE_2|TELEFONE_2'
                        .',DDD_FAX|DDD_FAX'
                        .',FAX|FAX'
                        .',CORREIO_ELETRONICO|CORREIO_ELETRONICO'
                        .',SITUACAO_ESPECIAL|SITUACAO_ESPECIAL'
                        .',DATA_SITUACAO_ESPECIAL|DATA_SITUACAO_ESPECIAL'
                        ;
        $grid = new TFormDinGrid($this,'gd','Data Grid');
        $grid->setUpdateFields($mixUpdateFields);
        $grid->addColumn($primaryKey,'id');
        $grid->addColumn('CNPJ_ORDEM','Cnpj Ordem');
        $grid->addColumn('CNPJ_DV','Cnpj Dv');
        $grid->addColumn('IDENTIFICADOR_MATRIZ_FILIAL','Identificador Matriz Filial');
        $grid->addColumn('NOME_FANTASIA','Nome Fantasia');
        $grid->addColumn('SITUACAO_CADASTRAL','Situação Cadastral');
        $grid->addColumnFormatDate('DATA_SITUACAO_CADASTRAL','Data Situação Cadastral',null,'left','dd/mm/yyyy hh:ii');
        $grid->addColumn('MOTIVO_SITUACAO_CADASTRAL','Motivo Situação Cadastral');
        $grid->addColumn('NOME_CIDADE_EXTERIOR','Nome Cidade Exterior');
        $grid->addColumn('PAIS','Pais');
        $grid->addColumnFormatDate('DATA_INICIO_ATIVIDADE','Data Inicio Atividade',null,'left','dd/mm/yyyy hh:ii');
        $grid->addColumn('CNAE_FISCAL_PRINCIPAL','Cnae Fiscal Principal');
        $grid->addColumn('CNAE_FISCAL_SECUNDARIA','Cnae Fiscal Secundaria');
        $grid->addColumn('TIPO_LOGRADOURO','Tipo Logradouro');
        $grid->addColumn('LOGRADOURO','Logradouro');
        $grid->addColumn('NUMERO','Numero');
        $grid->addColumn('COMPLEMENTO','Complemento');
        $grid->addColumn('BAIRRO','Bairro');
        $grid->addColumn('CEP','Cep');
        $grid->addColumn('UF','Uf');
        $grid->addColumn('MUNICIPIO','Municipio');
        $grid->addColumn('DDD_1','Ddd 1');
        $grid->addColumn('TELEFONE_1','Telefone 1');
        $grid->addColumn('DDD_2','Ddd 2');
        $grid->addColumn('TELEFONE_2','Telefone 2');
        $grid->addColumn('DDD_FAX','Ddd Fax');
        $grid->addColumn('FAX','Fax');
        $grid->addColumn('CORREIO_ELETRONICO','Correio Eletronico');
        $grid->addColumn('SITUACAO_ESPECIAL','Situação Especial');
        $grid->addColumnFormatDate('DATA_SITUACAO_ESPECIAL','Data Situação Especial',null,'left','dd/mm/yyyy hh:ii');

        $this->datagrid = $grid->show();
        $this->pageNavigation = $grid->getPageNavigation();
        $panelGroupGrid = $grid->getPanelGroupGrid();


        // creates the page structure using a table
        $formDinBreadCrumb = new TFormDinBreadCrumb(__CLASS__);
        $vbox = $formDinBreadCrumb->getAdiantiObj();
        $vbox->add($this->form);
        $vbox->add($panelGroupGrid);

        // add the table inside the page
        parent::add($vbox);
    }

    //--------------------------------------------------------------------------------
    /**
     * Close right panel
     */
     /*
    public function onClose()
    {
        TScript::create("Template.closeRightPanel()");
    } //END onClose
     */

    //--------------------------------------------------------------------------------
    public function onSave($param)
    {
        $data = $this->form->getData();
        //Função do FormDin para Debug
        FormDinHelper::d($param,'$param');
        FormDinHelper::debug($data,'$data');
        FormDinHelper::debug($_REQUEST,'$_REQUEST');

        try{
            $this->form->validate();
            $this->form->setData($data);
            $vo = new EstabelecimentoVO();
            $this->frm->setVo( $vo ,$data ,$param );
            $controller = new EstabelecimentoController();
            $resultado = $controller->save( $vo );
            if( is_int($resultado) && $resultado!=0 ) {
                //$text = TFormDinMessage::messageTransform($text); //Tranform Array in Msg Adianti
                $this->onReload();
                $this->frm->addMessage( _t('Record saved') );
                //$this->frm->clearFields();
            }else{
                $this->frm->addMessage($resultado);
            }
        }catch (Exception $e){
            new TMessage(TFormDinMessage::TYPE_ERROR, $e->getMessage());
        } //END TryCatch
    } //END onSave

}