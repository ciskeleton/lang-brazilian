<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Componentes';
$lang['admin_content'] = 'Conteúdo';
$lang['admin_database_backup'] = 'Backups do Banco de Dados';
$lang['admin_extensions'] = 'Extensões.';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Ajuda';
$lang['admin_languages'] = 'Idiomas';
$lang['admin_logs'] = 'Logs do Sistema';
$lang['admin_media'] = 'Biblioteca de Mídia';
$lang['admin_modules'] = 'Módulos';
$lang['admin_plugins'] = 'Plugins';
$lang['admin_reports'] = 'Registro de atividades';
$lang['admin_settings'] = 'Configurações do Sistema';
$lang['admin_sysinfo'] = 'Informações do Sistema';
$lang['admin_system'] = 'Sistema';
$lang['admin_system_firewall'] = 'Firewall do Sistema';
$lang['admin_themes'] = 'Temas';
$lang['admin_updates'] = 'Atualizações do Sistema';
$lang['admin_users'] = 'Usuários';
$lang['admin_view_site'] = 'Ver site';
$lang['per_page'] = 'Por Página';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Obrigado por criar com <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Nenhum item ativo.} other{<b>#</b> de <b>%s</b> itens estão ativos.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Falha na instalação: %s';
$lang['admin_install_location_app'] = 'Somente este aplicativo';
$lang['admin_install_location_core'] = 'Todos os aplicativos';
$lang['admin_install_location_select'] = '&#151; Selecionar local &#151;';
$lang['admin_install_update_confirm'] = 'Tem certeza de que deseja atualizar este pacote?';
$lang['admin_install_update_error'] = 'Falha ao atualizar o pacote.';
$lang['admin_install_update_skip_confirm'] = 'Tem certeza de que deseja ignorar esta atualização?';
$lang['admin_install_update_skip_error'] = 'Falha ao ignorar esta atualização.';
$lang['admin_install_update_skip_success'] = 'Atualização ignorada com sucesso.';
$lang['admin_install_update_success'] = 'Pacote atualizado com sucesso.';
$lang['admin_install_upload_tip'] = 'Instale um pacote enviando seu arquivo <b>.zip</b> aqui.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Não foi possível limpar os arquivos antigos de backup.';
$lang['admin_database_backup_clean_success'] = '%d arquivos de backup excluídos. %d espaço em disco liberado.';
$lang['admin_database_backup_create'] = 'Criar Backup';
$lang['admin_database_backup_create_confirm'] = 'Tem certeza de que deseja criar um backup agora?';
$lang['admin_database_backup_create_error'] = 'Não foi possível criar o arquivo de backup. Certifique-se de que a pasta <b>%s</b> tem permissão de escrita.';
$lang['admin_database_backup_create_success'] = 'Arquivo de backup do banco de dados <b>%s</b> criado com sucesso.';
$lang['admin_database_backup_delete_confirm'] = 'Tem certeza de que deseja excluir esses arquivos de backup?';
$lang['admin_database_backup_delete_error'] = 'Não foi possível excluir os arquivos de backup selecionados.';
$lang['admin_database_backup_delete_success'] = 'Arquivos de backup excluídos com sucesso.';
$lang['admin_database_backup_download_error'] = 'Não foi possível baixar o arquivo de backup selecionado.';
$lang['admin_database_backup_download_success'] = 'Arquivo de backup baixado com sucesso.';
$lang['admin_database_backup_lock_confirm'] = 'Tem certeza de que deseja bloquear esses arquivos de backup?';
$lang['admin_database_backup_lock_error'] = 'Não foi possível bloquear os arquivos de backup selecionados.';
$lang['admin_database_backup_lock_success'] = 'Arquivos de backup bloqueados com sucesso.';
$lang['admin_database_backup_locked_error'] = 'Não foi possível excluir os arquivos de backup bloqueados.';
$lang['admin_database_backup_missing_error'] = 'Não foi possível encontrar o arquivo de backup.';
$lang['admin_database_backup_unlock_confirm'] = 'Tem certeza de que deseja desbloquear esses arquivos de backup?';
$lang['admin_database_backup_unlock_error'] = 'Não foi possível desbloquear os arquivos de backup selecionados.';
$lang['admin_database_backup_unlock_success'] = 'Arquivos de backup desbloqueados com sucesso.';
$lang['admin_database_prune'] = 'Limpeza';
$lang['admin_database_prune_confirm'] = 'Tem certeza de que deseja limpar o banco de dados? Um backup será criado antes da execução.';
$lang['admin_database_prune_error'] = 'Não foi possível limpar o banco de dados.';
$lang['admin_database_prune_next'] = 'Próxima limpeza: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Banco de dados limpo com sucesso.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Excluir Logs';
$lang['admin_logs_delete_confirm'] = 'Tem certeza de que deseja excluir os registros selecionados?';
$lang['admin_logs_delete_error'] = 'Não foi possível excluir os arquivos de log.';
$lang['admin_logs_delete_success'] = 'Arquivos de log excluídos com sucesso.';
$lang['admin_logs_error_disabled'] = 'O registro não está atualmente ativado.';
$lang['admin_logs_error_empty'] = 'Nenhum log encontrado.';
$lang['admin_logs_error_missing'] = 'Ou o arquivo de log não pôde ser localizado, ou estava vazio.';
$lang['admin_logs_tip'] = 'O registro pode criar rapidamente arquivos muito grandes. Para sites ao vivo, considere excluir os mais antigos.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Tem certeza de que deseja excluir os e-mails selecionados?';
$lang['admin_emails_delete_error'] = 'Não foi possível excluir os e-mails selecionados.';
$lang['admin_emails_delete_success'] = 'E-mails selecionados excluídos com sucesso.';
$lang['admin_emails_email_from'] = 'Enviado de';
$lang['admin_emails_mail_queue'] = 'Fila de e-mails';
$lang['admin_emails_mailer'] = 'E-mail em Massa';
$lang['admin_emails_search'] = 'Buscar e-mails por assunto ou conteúdo...';
$lang['admin_emails_send_error'] = 'Falha ao colocar o e-mail na fila. Tente novamente.';
$lang['admin_emails_send_none'] = 'Nenhum usuário corresponde aos critérios selecionados.';
$lang['admin_emails_send_success'] = 'O e-mail foi colocado na fila e será enviado em breve.';
$lang['admin_emails_send_to_banned'] = 'Enviar para usuários banidos.';
$lang['admin_emails_send_to_deleted'] = 'Enviar para usuários excluídos.';
$lang['admin_emails_send_to_disabled'] = 'Enviar para usuários inativos.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Adicionar Usuário';
$lang['admin_users_all_users'] = 'Todos os Usuários';
$lang['admin_users_ban_confirm'] = 'Tem certeza de que deseja banir os usuários selecionados?';
$lang['admin_users_ban_error'] = 'Não foi possível banir os usuários selecionados.';
$lang['admin_users_ban_success'] = 'Usuários selecionados banidos com sucesso.';
$lang['admin_users_delete_confirm'] = 'Tem certeza de que deseja excluir os usuários selecionados?';
$lang['admin_users_delete_error'] = 'Não foi possível excluir os usuários selecionados.';
$lang['admin_users_delete_success'] = 'Usuários selecionados excluídos com sucesso.';
$lang['admin_users_disable_confirm'] = 'Tem certeza de que deseja desativar os usuários selecionados?';
$lang['admin_users_disable_error'] = 'Não foi possível desativar os usuários selecionados.';
$lang['admin_users_disable_success'] = 'Usuários selecionados desativados com sucesso.';
$lang['admin_users_edit'] = 'Editar Usuário';
$lang['admin_users_edit_error'] = 'Não foi possível atualizar o usuário.';
$lang['admin_users_edit_success'] = 'Usuário atualizado com sucesso.';
$lang['admin_users_enable_confirm'] = 'Tem certeza de que deseja ativar os usuários selecionados?';
$lang['admin_users_enable_error'] = 'Não foi possível ativar os usuários selecionados.';
$lang['admin_users_enable_success'] = 'Usuários selecionados ativados com sucesso.';
$lang['admin_users_groups'] = 'Grupos';
$lang['admin_users_lock_confirm'] = 'Tem certeza de que deseja bloquear os usuários selecionados?';
$lang['admin_users_lock_error'] = 'Não foi possível bloquear os usuários selecionados.';
$lang['admin_users_lock_success'] = 'Usuários selecionados bloqueados com sucesso.';
$lang['admin_users_logged'] = 'Usuários Conectados';
$lang['admin_users_manage'] = 'Gerenciar Usuários';
$lang['admin_users_remove_confirm'] = 'Tem certeza de que deseja excluir permanentemente os usuários selecionados e todos os seus dados?';
$lang['admin_users_remove_error'] = 'Não foi possível excluir permanentemente os usuários selecionados e todos os seus dados.';
$lang['admin_users_remove_success'] = 'Usuários selecionados e todos os seus dados excluídos com sucesso.';
$lang['admin_users_restore_confirm'] = 'Tem certeza de que deseja restaurar os usuários selecionados?';
$lang['admin_users_restore_error'] = 'Não foi possível restaurar os usuários selecionados.';
$lang['admin_users_restore_success'] = 'Usuários selecionados restaurados com sucesso.';
$lang['admin_users_search'] = 'Buscar por nome ou e-mail...';
$lang['admin_users_unban_confirm'] = 'Tem certeza de que deseja desbanir os usuários selecionados?';
$lang['admin_users_unban_error'] = 'Não foi possível desbanir os usuários selecionados.';
$lang['admin_users_unban_success'] = 'Usuários selecionados desbanidos com sucesso.';
$lang['admin_users_unlock_confirm'] = 'Tem certeza de que deseja desbloquear os usuários selecionados?';
$lang['admin_users_unlock_error'] = 'Não foi possível desbloquear os usuários selecionados.';
$lang['admin_users_unlock_success'] = 'Usuários selecionados desbloqueados com sucesso.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Limpar Logs';
$lang['admin_reports_clear_confirm'] = 'Tem certeza de que deseja limpar o registro de ações?';
$lang['admin_reports_clear_error'] = 'Não foi possível limpar o registro de ações.';
$lang['admin_reports_clear_success'] = 'Registro de ações limpo com sucesso.';
$lang['admin_reports_latest_actions'] = 'Últimas Ações';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Tem certeza de que deseja excluir os arquivos selecionados?';
$lang['admin_media_delete_error'] = 'Não foi possível excluir os arquivos.';
$lang['admin_media_delete_success'] = 'Arquivos excluídos com sucesso.';
$lang['admin_media_file_delete_error'] = 'Não foi possível excluir o arquivo.';
$lang['admin_media_file_delete_success'] = 'Arquivo excluído com sucesso.';
$lang['admin_media_file_update_error'] = 'Não foi possível atualizar o arquivo.';
$lang['admin_media_file_update_success'] = 'Arquivo atualizado com sucesso.';
$lang['admin_media_search'] = 'Buscar por nome, descrição ou nome do arquivo...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Nenhum módulo ativo.} other{<b>#</b> de <b>%s</b> módulos estão ativos.}';
$lang['admin_modules_add'] = 'Adicionar Módulo';
$lang['admin_modules_delete_confirm'] = 'Tem certeza de que deseja excluir o módulo: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Não foi possível excluir o módulo.';
$lang['admin_modules_delete_error_active'] = 'Os módulos ativos não podem ser excluídos.';
$lang['admin_modules_delete_success'] = 'Módulo excluído com sucesso.';
$lang['admin_modules_disable_all_confirm'] = 'Tem certeza de que deseja desativar todos os módulos?';
$lang['admin_modules_disable_all_error'] = 'Não foi possível desativar todos os módulos.';
$lang['admin_modules_disable_all_success'] = 'Todos os módulos foram desativados com sucesso.';
$lang['admin_modules_disable_confirm'] = 'Tem certeza de que deseja desativar o módulo: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Não foi possível desativar o módulo.';
$lang['admin_modules_disable_success'] = 'Módulo desativado com sucesso.';
$lang['admin_modules_enable_all_confirm'] = 'Tem certeza de que deseja ativar todos os módulos?';
$lang['admin_modules_enable_all_error'] = 'Não foi possível ativar todos os módulos.';
$lang['admin_modules_enable_all_success'] = 'Todos os módulos foram ativados com sucesso.';
$lang['admin_modules_enable_confirm'] = 'Tem certeza de que deseja ativar o módulo: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Não foi possível ativar o módulo.';
$lang['admin_modules_enable_success'] = 'Módulo ativado com sucesso.';
$lang['admin_modules_global'] = 'Módulo global (compartilhado)';
$lang['admin_modules_install_confirm'] = 'Tem certeza de que deseja instalar o módulo: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'Falha ao instalar o módulo.';
$lang['admin_modules_install_success'] = 'Módulo instalado com sucesso.';
$lang['admin_modules_install_tip'] = 'Módulos adicionam novos recursos e funcionalidades ao seu site. Explore os módulos disponíveis no <a href="%s" target="_blank" rel="noopener">diretório de módulos</a> ou envie um pacote <b>.zip</b>.';
$lang['admin_modules_update_confirm'] = 'Tem certeza de que deseja atualizar este módulo?';
$lang['admin_modules_update_error'] = 'Falha ao atualizar o módulo.';
$lang['admin_modules_update_success'] = 'Módulo atualizado com sucesso.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Nenhum plugin ativo.} other{<b>#</b> de <b>%s</b> plugins estão ativos.}';
$lang['admin_plugins_add'] = 'Adicionar Plugin';
$lang['admin_plugins_delete_confirm'] = 'Tem certeza de que deseja excluir o plugin: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Não foi possível excluir o plugin.';
$lang['admin_plugins_delete_error_active'] = 'Os plugins ativos não podem ser excluídos.';
$lang['admin_plugins_delete_success'] = 'Plugin excluído com sucesso.';
$lang['admin_plugins_disable_all_confirm'] = 'Tem certeza de que deseja desativar todos os plugins?';
$lang['admin_plugins_disable_all_error'] = 'Não foi possível desativar todos os plugins.';
$lang['admin_plugins_disable_all_success'] = 'Todos os plugins foram desativados com sucesso.';
$lang['admin_plugins_disable_confirm'] = 'Tem certeza de que deseja desativar o plugin: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Não foi possível desativar o plugin.';
$lang['admin_plugins_disable_success'] = 'Plugin desativado com sucesso.';
$lang['admin_plugins_enable_all_confirm'] = 'Tem certeza de que deseja ativar todos os plugins?';
$lang['admin_plugins_enable_all_error'] = 'Não foi possível ativar todos os plugins.';
$lang['admin_plugins_enable_all_success'] = 'Todos os plugins foram ativados com sucesso.';
$lang['admin_plugins_enable_confirm'] = 'Tem certeza de que deseja ativar o plugin: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Não foi possível ativar o plugin.';
$lang['admin_plugins_enable_success'] = 'Plugin ativado com sucesso.';
$lang['admin_plugins_global'] = 'Plugin global (compartilhado)';
$lang['admin_plugins_install_confirm'] = 'Tem certeza de que deseja instalar o plugin: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'Falha ao instalar o plugin.';
$lang['admin_plugins_install_success'] = 'Plugin instalado com sucesso.';
$lang['admin_plugins_install_tip'] = 'Plugins estendem recursos existentes com opções extras ou integrações. Instale a partir do <a href="%s" target="_blank" rel="noopener">diretório de plugins</a> ou envie um arquivo <b>.zip</b>.';
$lang['admin_plugins_update_confirm'] = 'Tem certeza de que deseja atualizar este plugin?';
$lang['admin_plugins_update_error'] = 'Falha ao atualizar o plugin.';
$lang['admin_plugins_update_success'] = 'Plugin atualizado com sucesso.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Adicionar Tema';
$lang['admin_themes_delete_confirm'] = 'Tem certeza de que deseja excluir o tema: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Não foi possível excluir o tema.';
$lang['admin_themes_delete_error_active'] = 'Você não pode excluir o tema atualmente ativo.';
$lang['admin_themes_delete_success'] = 'Tema excluído com sucesso.';
$lang['admin_themes_disable_confirm'] = 'Tem certeza de que deseja desativar o tema: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Não foi possível desativar o tema.';
$lang['admin_themes_disable_error_active'] = 'O tema ativo não pode ser desativado.';
$lang['admin_themes_disable_success'] = 'Tema desativado com sucesso.';
$lang['admin_themes_enable_confirm'] = 'Tem certeza de que deseja ativar o tema: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Não foi possível ativar o tema.';
$lang['admin_themes_enable_success'] = 'Tema ativado com sucesso.';
$lang['admin_themes_install_confirm'] = 'Tem certeza de que deseja instalar o tema: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'Falha ao instalar o tema.';
$lang['admin_themes_install_success'] = 'Tema instalado com sucesso.';
$lang['admin_themes_install_tip'] = 'Temas alteram a aparência e o layout do seu site. Escolha na <a href="%s" target="_blank" rel="noopener">biblioteca de temas</a> ou envie um arquivo <b>.zip</b> para instalar o seu.';
$lang['admin_themes_none_tip'] = 'Este aplicativo está sendo executado sem um tema. Instale um para personalizar a interface pública.';
$lang['admin_themes_update_confirm'] = 'Tem certeza de que deseja atualizar este tema?';
$lang['admin_themes_update_error'] = 'Falha ao atualizar o tema.';
$lang['admin_themes_update_success'] = 'Tema atualizado com sucesso.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menus';
$lang['admin_menus_assign_error'] = 'Não foi possível atualizar os locais dos menus.';
$lang['admin_menus_assign_success'] = 'Locais dos menus atualizados com sucesso.';
$lang['admin_menus_header'] = 'Existem <b>%s</b> locais de menu disponíveis.';
$lang['admin_menus_location'] = 'Local';
$lang['admin_menus_locations'] = 'Locais de Menu';
$lang['admin_menus_manage'] = 'Gerenciar Menus';
$lang['admin_menus_menu'] = 'Menu Atribuído';
$lang['admin_menus_none'] = '&#151; Nenhum &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Adicionar idioma';
$lang['admin_languages_default_confirm'] = 'Tem certeza de que deseja definir este idioma como idioma padrão do site?';
$lang['admin_languages_default_error'] = 'Não foi possível mudar o idioma padrão.';
$lang['admin_languages_default_error_nochange'] = 'Este idioma já é o padrão.';
$lang['admin_languages_default_success'] = 'Idioma padrão alterado com sucesso.';
$lang['admin_languages_delete_confirm'] = 'Tem certeza de que deseja excluir o idioma: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'Falha ao excluir o idioma.';
$lang['admin_languages_delete_error_active'] = 'Os idiomas ativos não podem ser excluídos.';
$lang['admin_languages_delete_error_default'] = 'O idioma padrão não pode ser excluído.';
$lang['admin_languages_delete_success'] = 'Idioma excluído com sucesso.';
$lang['admin_languages_disable_all_confirm'] = 'Tem certeza de que deseja desativar todos os idiomas?';
$lang['admin_languages_disable_all_error'] = 'Não foi possível desativar todos os idiomas.';
$lang['admin_languages_disable_all_success'] = 'Todos os idiomas foram desativados com sucesso.';
$lang['admin_languages_disable_confirm'] = 'Tem certeza de que deseja desativar o idioma: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Não foi possível desativar o idioma.';
$lang['admin_languages_disable_error_default'] = 'O idioma padrão não pode ser desativado.';
$lang['admin_languages_disable_error_nochange'] = 'Este idioma já está desativado.';
$lang['admin_languages_disable_success'] = 'Idioma desativado com sucesso.';
$lang['admin_languages_enable_all_confirm'] = 'Tem certeza de que deseja ativar todos os idiomas?';
$lang['admin_languages_enable_all_error'] = 'Não foi possível ativar todos os idiomas.';
$lang['admin_languages_enable_all_success'] = 'Todos os idiomas foram ativados com sucesso.';
$lang['admin_languages_enable_confirm'] = 'Tem certeza de que deseja ativar o idioma: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Não foi possível ativar o idioma.';
$lang['admin_languages_enable_error_nochange'] = 'Este idioma já está ativado.';
$lang['admin_languages_enable_success'] = 'Idioma ativado com sucesso.';
$lang['admin_languages_install_confirm'] = 'Tem certeza de que deseja instalar o idioma: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'Falha ao instalar o idioma.';
$lang['admin_languages_install_success'] = 'Idioma instalado com sucesso.';
$lang['admin_languages_install_tip'] = 'Os idiomas adicionam traduções para a interface e o conteúdo do seu site. Consulte os idiomas disponíveis no <a href="%s" target="_blank" rel="noopener">diretório de idiomas</a> ou envie um pacote <b>.zip</b> para instalar o seu próprio.';
$lang['admin_languages_tip'] = 'Ative, desative e defina o idioma padrão do site. Idiomas ativados estão disponíveis para visitantes do site.';
$lang['admin_languages_update_confirm'] = 'Tem certeza de que deseja atualizar este idioma?';
$lang['admin_languages_update_error'] = 'Falha ao atualizar o idioma.';
$lang['admin_languages_update_success'] = 'Idioma atualizado com sucesso.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'O pacote já existe.';
$lang['package_archive_download_failed'] = 'Falha ao baixar o arquivo do pacote.';
$lang['package_backup_create_error'] = 'Falha ao criar o backup do pacote.';
$lang['package_backup_dir_failed'] = 'Falha ao criar o diretório de backup %s';
$lang['package_backup_missing'] = 'O arquivo de backup não existe.';
$lang['package_backup_path_error'] = 'O caminho do arquivo de backup não pôde ser resolvido.';
$lang['package_backup_request_invalid'] = 'Solicitação de backup inválida.';
$lang['package_backup_restore_error'] = 'Falha ao restaurar o backup do pacote.';
$lang['package_catalog_type_unknown'] = 'Tipo de catálogo desconhecido.';
$lang['package_checksum_error'] = 'A verificação de integridade (checksum) do pacote falhou.';
$lang['package_copy_files_error'] = 'Falha ao copiar os arquivos do pacote para o destino.';
$lang['package_copy_updates_error'] = 'Falha ao copiar os arquivos de atualização para o destino.';
$lang['package_dest_dir_failed'] = 'Falha ao criar o diretório de destino %s';
$lang['package_destination_error'] = 'O destino do pacote não pôde ser resolvido.';
$lang['package_download_dir_failed'] = 'Falha ao criar o diretório de download %s';
$lang['package_download_empty'] = 'O download do pacote retornou uma resposta vazia.';
$lang['package_download_request_invalid'] = 'Solicitação de download do pacote inválida.';
$lang['package_extract_failed'] = 'Falha ao extrair o ZIP %s';
$lang['package_invalid_lang_files'] = 'Idioma inválido — arquivos de idioma obrigatórios do aplicativo ausentes.';
$lang['package_invalid_lang_structure'] = 'Idioma inválido — diretórios admin e/ou ci3 ausentes.';
$lang['package_invalid_missing_info'] = '%s inválido: "info.php" ausente.';
$lang['package_invalid_module_structure'] = 'Módulo inválido — diretórios config e/ou controllers obrigatórios ausentes.';
$lang['package_invalid_plugin_boot'] = 'Plugin inválido — arquivo "boot.php" ausente.';
$lang['package_invalid_plugin_contents'] = 'Plugin inválido — plugins não podem conter controllers ou views.';
$lang['package_invalid_theme_boot'] = 'Tema inválido — arquivo "boot.php" ausente.';
$lang['package_invalid_theme_views'] = 'Tema inválido — diretório views ausente.';
$lang['package_no_root_dir'] = 'O pacote não contém um diretório raiz.';
$lang['package_not_downloadable'] = 'O pacote não está disponível para download público.';
$lang['package_not_in_registry'] = 'O pacote não está disponível no registro público.';
$lang['package_request_invalid'] = 'Solicitação de pacote inválida.';
$lang['package_rollback_request_invalid'] = 'Solicitação de reversão inválida.';
$lang['package_root_mismatch'] = 'A raiz do arquivo do pacote não corresponde a %s';
$lang['package_single_root_required'] = 'O pacote deve conter exatamente um diretório raiz.';
$lang['package_source_error'] = 'A origem do pacote não pôde ser resolvida.';
$lang['package_system_core_restricted'] = 'Componentes do sistema não podem ser instalados como pacotes.';
$lang['package_temp_dir_failed'] = 'Falha ao criar o diretório temporário %s';
$lang['package_type_unknown'] = 'Tipo de pacote desconhecido.';
$lang['package_update_request_invalid'] = 'Solicitação de atualização de pacote inválida.';
$lang['package_update_root_mismatch'] = 'A raiz do arquivo de atualização não corresponde a %s.';
$lang['package_upload_dir_failed'] = 'Falha ao criar o diretório de upload %s';
$lang['package_url_invalid'] = 'URL de distribuição do pacote inválida.';
$lang['package_write_failed'] = 'Falha ao gravar o pacote em %s';
$lang['package_zip_not_found'] = 'O arquivo ZIP do pacote não existe: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Novas atualizações disponíveis!';
$lang['update_backup_error'] = 'Não foi possível criar um backup do pacote existente. A atualização foi cancelada.';
$lang['update_check_disabled'] = 'Verificações automáticas de atualização estão desativadas. Ative-as para visualizar atualizações.';
$lang['update_check_error'] = 'Não foi possível executar a verificação de atualização no momento.';
$lang['update_check_success'] = 'Verificação de atualização concluída com sucesso.';
$lang['update_install_error'] = 'O pacote não pôde ser instalado. A versão anterior foi mantida.';
$lang['update_install_success'] = 'Pacote atualizado com sucesso para a versão mais recente.';
$lang['update_interval_3days'] = 'A cada 3 dias';
$lang['update_interval_biweekly'] = 'A cada 2 semanas';
$lang['update_interval_daily'] = 'Todos os dias';
$lang['update_interval_monthly'] = 'Uma vez por mês';
$lang['update_interval_weekly'] = 'Uma vez por semana';
$lang['update_not_available'] = 'Seu site está atualizado.';
$lang['update_rollback_confirm'] = 'Tem certeza de que deseja restaurar a versão anterior?';
$lang['update_rollback_error'] = 'Não foi possível restaurar a versão anterior. Intervenção manual pode ser necessária.';
$lang['update_rollback_success'] = 'Versão anterior restaurada com sucesso.';
$lang['updates_available'] = 'Atualizações disponíveis';
$lang['updates_check_now'] = 'Verificar agora';
$lang['updates_check_now_confirm'] = 'Tem certeza de que deseja verificar atualizações agora?';
$lang['updates_current_version'] = 'Versão atual';
$lang['updates_enable'] = 'Ativar atualizações';
$lang['updates_last_check'] = 'Última verificação: %s';
$lang['updates_latest_version'] = 'Versão mais recente';
$lang['updates_next_check'] = 'Próxima verificação agendada: %s';
$lang['updates_previous_version'] = 'Versão anterior';
$lang['updates_recent'] = 'Atualizados recentemente';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Falha ao bloquear o endereço IP especificado.';
$lang['admin_firewall_ban_success'] = 'Endereço IP foi bloqueado com sucesso.';
$lang['admin_firewall_block_ip'] = 'Bloquear endereço IP';
$lang['admin_firewall_delete_confirm'] = 'Tem certeza de que deseja desbloquear os endereços IP selecionados?';
$lang['admin_firewall_delete_error'] = 'Falha ao desbloquear os endereços IP selecionados.';
$lang['admin_firewall_delete_success'] = 'Endereços IP selecionados foram desbloqueados com sucesso.';
$lang['admin_firewall_duration'] = 'Duração do banimento';
$lang['admin_firewall_permanent'] = 'Permanente';
$lang['admin_firewall_reason'] = 'Motivo do banimento';
$lang['admin_firewall_tip'] = 'Visualize e gerencie endereços IP bloqueados pelo firewall devido a violações repetidas ou atividade suspeita.';

// Settings
$lang['404_ban_duration'] = 'Duração do banimento 404';
$lang['404_threshold'] = 'Limite de erros 404';
$lang['uri_ban_duration'] = 'Duração do banimento URI';
$lang['uri_strike_threshold'] = 'Limite de strikes URI';
