<?php
/* {[The file is published on the basis of YetiForce Public License that can be found in the following directory: licenses/License.html
 * Contributor(s): Valmir C. Trindade - Brazilian Portuguese Translation - valmir@ttcasolucoes.com.br
 * ]} */

$languageStrings = [
	'LBL_BACKUP_DESCRIPTION' => 'Criar arquivo de backup.',
	'LBL_SAVE_BACKUP' => 'Salvar backup',
	'LBL_SCHEDULE_BACKUP' => 'Gerar Backup',
	'LBL_LOADING' => 'O Backup está sendo gerado, por favor, aguarde...',
	'LBL_FTP_SETTINGS' => 'Configurações FTP',
	'LBL_BACKUP_CREATING' => 'Criação Backup',
	'LBL_RESUME_BACKUP' => 'Resultado backup',
	'LBL_START_TIME' => 'Criado por',
	'LBL_FILE_NAME' => 'Nome arquivo',
	'LBL_ACTION' => 'Ação',
	'LBL_FTP_SAVE_CONFIG' => 'Salvar configuração',
	'LBL_HOST' => 'Host',
	'LBL_LOGIN' => 'Acesso',
	'LBL_PASSWORD' => 'Senha',
	'LBL_CONNECTION_STATUS' => 'Status da conexão',
	'LBL_SEND_TO_FTP' => 'Enviar para FTP',
	'LBL_ACTIVE' => 'Ativo',
	'LBL_PATH' => 'Salvar caminho',
	'LBL_PATH_INFO' => 'Se o campo Caminho estiver vazio, o backup será salvo na pasta principal',
	'LBL_EMAIL_NOTIFICATIONS' => 'Notificações por e-mail',
	'LBL_USERS_FOR_NOTIFICATIONS' => 'Usuários para notificações',
	'LBL_SAVE_CHANGES' => 'Alterações salvas',
	'LBL_GENERAL_SETTINGS' => 'Configurações gerais',
	'LBL_STORAGEFOLDER_INFO' => 'Deseja fazer backup da pasta storage',
	'LBL_BACKUPFOLDER_INFO' => 'Deseja fazer uma cópia da pasta backup',
	'LBL_VALUES' => 'Valores',
	'LBL_DETAIL' => 'Detalhes',
	'LBL_BACKUP_COPY_TYPE' =>'Backup save type',
	'LBL_BACKUP_SINGLE' =>'Partial',
	'LBL_BACKUP_OVERALL' =>'Full',

	'LBL_ALERT_NO_ZIP_EXTENSION_TITLE' => 'Nenhuma bilbioteca ZIP ativa foi encontrada',
	'LBL_ALERT_NO_ZIP_EXTENSION_DESC' => 'A conclusão do backup é impossível. O backup irá cria uma cópia da base de dados e não será zipada',
	'LBL_ALERT_CRON_NOT_ACTIVE_TITLE' => 'Cron - O backup dos dados não está ativo',
	'LBL_ALERT_CRON_NOT_ACTIVE_DESC' => 'A realização do backup não será possível, para habilitar vá para <a href="index.php?module=CronTasks&parent=Settings&view=List" target="_blank">Horário</a> e ative o Backup',
	'LBL_ALERT_OUTGOING_MAIL_NOT_CONFIGURED_TITLE' => 'O Servidor de Envio de Mensagem não está configurado',
	'LBL_ALERT_OUTGOING_MAIL_NOT_CONFIGUREDE_DESC' => 'Todos os e-mails de notificações que deveriam ser enviados após o backup não serão enviados',
	'LBL_END_TIME' =>'Hora final',
	'LBL_BACKUP_TIME' =>'Tempo de duração do Backup',
	'LBL_LOGS' =>'Logs',
	'Completed' =>'Correto',
	'In progress' =>'Em andamento',
	'LBL_SET_SCHEDULE_BACKUP' => 'O backup foi agendado',

	'LBL_STAGE_1' =>'Criando arquivo SQL vazio',
	'LBL_STAGE_2' =>'Gerando estrutura do backup',
	'LBL_STAGE_3' =>'Criando backup da base de dados',
	'LBL_STAGE_4' =>'Gerando estrutura de pastas e arquivos',
	'LBL_STAGE_5' =>'Criando backups de pastas e arquivos',
	'LBL_STAGE_6' =>'Mesclando arquivos de backup',
	'LBL_STAGE_7' =>'Eliminado dados provisórios',
	'LBL_STAGE_8' =>'Enviando dado para FTP',
	'LBL_STAGE_9' =>'Concluindo backup',
];
$jsLanguageStrings = [
	'JS_MANDATORY_FIELDS_EMPTY' => 'Os campos obrigatórios não podem estar vazios',
	'JS_PORT_ONLY_NUMBERS' => 'O campo Porta somente aceita números',
	'JS_SAVE_CHANGES' => 'Mudanças salvas',
	'JS_HOST_NOT_CORRECT' => 'Endereço de host incorreto',	
	'JS_CONNECTION_FAIL' => 'A tentativa de acesso falhou', 
];
