<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Atualizações do sistema disponíveis';
$lang['emails_updates_available_message'] = <<<EOT
Olá,

Foram detectadas novas atualizações do sistema para {site_anchor}.

Essas atualizações podem incluir correções de segurança, melhorias de desempenho ou novos recursos.
Recomendamos que você as analise o mais rápido possível.

Você pode revisar e gerenciar as atualizações disponíveis no painel de administração:
{link}

Se você já revisou ou aplicou as atualizações, nenhuma ação adicional é necessária.

Esta é uma mensagem automática do sistema enviada por {site_name}.
Não responda a este e-mail.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Ativação de conta';
$lang['emails_account_activation_request_message'] = <<<EOT
Olá {name},

Obrigado por se registrar no {site_anchor}. Sua conta foi criada e deve ser ativada antes de poder utilizá-la.

Para ativar sua conta, clique no seguinte link ou copie e cole no seu navegador:
{link}

Atenciosamente,
-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Novo link de ativação';
$lang['emails_account_activation_resend_message'] = <<<EOT
Olá {name},

Recentemente, você solicitou um novo link de ativação no {site_anchor} porque sua conta não estava ativa.
Para ativar sua conta, clique no seguinte link ou copie e cole no seu navegador:
{link}

Se você não solicitou isso, nenhuma ação adicional é necessária.

Esta ação foi solicitada a partir do endereço IP: {ip_link}.

Atenciosamente,
-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Conta ativada';
$lang['emails_account_activation_success_message'] = <<<EOT
Olá {name},

Sua conta no {site_anchor} foi ativada com sucesso. Agora você pode <a href="{login_url}" target="_blank" rel="noopener">fazer login</a> a qualquer momento.

Esperamos que aproveite sua estadia. Aceite nossos cumprimentos.

Atenciosamente,
-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Conta aguardando aprovação';
$lang['emails_account_approval_pending_message'] = <<<EOT
Olá {name},

Obrigado por se juntar a nós no {site_anchor}. Sua conta foi criada, mas precisa de aprovação de um administrador do site antes de ser ativada.
Pedimos sinceras desculpas por este passo crucial, mas ele é apenas para fins de segurança.

Você receberá um e-mail de confirmação assim que sua conta for aprovada.

Esperamos que aproveite sua estadia, por favor, aceite nossos melhores cumprimentos.

-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Conta aprovada';
$lang['emails_account_approval_success_message'] = <<<EOT
Olá {name},

Boas notícias! Sua conta em {site_anchor} foi aprovada.

Agora você já pode fazer login e começar a usar sua conta imediatamente:
{link}

Ficamos felizes em ter você conosco.

-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Conta restaurada';
$lang['emails_account_restored_message'] = <<<EOT
Olá {name},

Este e-mail confirma que sua conta no {site_anchor} foi restaurada com sucesso.

Seja bem-vindo de volta, esperamos que desta vez aproveite sua estadia.

Atenciosamente,
-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Bem-vindo(a) ao {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Olá {name},

A maioria das pessoas tem sequências de e-mails de boas-vindas muito longas após você se registrar em seus sites.

Boas notícias: nós não somos como a maioria das pessoas. Mas, ainda assim, queremos dar-lhe as boas-vindas e agradecer por se juntar a nós no {site_anchor}.

Esperamos que aproveite sua estadia, aceite nossos sinceros cumprimentos.

-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Solicitação de alteração de e-mail';
$lang['emails_email_change_request_message'] = <<<EOT
Olá {name},

Você está recebendo este e-mail porque recebemos uma solicitação de alteração de e-mail para sua conta no {site_anchor}.

Clique no link a seguir ou copie e cole no seu navegador se desejar prosseguir:
{link}

Se você não solicitou a alteração de e-mail, nenhuma ação adicional é necessária.

Esta ação foi solicitada a partir do endereço IP: {ip_link}.

Atenciosamente,
-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Endereço de e-mail alterado';
$lang['emails_email_change_success_message'] = <<<EOT
Olá {name},

Este e-mail confirma que o endereço de e-mail utilizado no {site_anchor} foi alterado com sucesso.

Se você não realizou esta ação, entre em contato conosco o mais rápido possível para resolver este problema.

Esta ação foi realizada a partir do endereço IP: {ip_link}.

Atenciosamente,
-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Alerta de falha no login';
$lang['emails_login_alert_failure_message'] = <<<EOT
Olá {name},

Alguém recentemente tentou usar senhas erradas para acessar sua conta {site_name}.

Data do servidor: {date}
Dispositivo: {browser}, {platform}
Endereço IP: {ip_link}

Se não foi você, não se preocupe, a tentativa de login não foi bem-sucedida.

Se foi você e não se lembra da senha, clique no link abaixo para redefini-la:
{reset_link}

Se estiver com dificuldades para acessar sua conta, entre em contato com nossa equipe ou solicite um link de login direto.

-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Notificação de login bem-sucedido';
$lang['emails_login_alert_success_message'] = <<<EOT
Olá {name},

Enviamos este e-mail após você efetuar login com sucesso na sua conta {site_name}.

Data do servidor: {date}
Dispositivo: {browser}, {platform}
Endereço IP: {ip_link}

Se foi você quem fez o login, pode ignorar este e-mail com segurança.

Se você não fez o login, altere sua senha imediatamente para proteger sua conta.

Para qualquer assistência, entre em contato com nossa equipe de suporte.

-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Link de login rápido';
$lang['emails_login_magic_link_message'] = <<<EOT
Olá {name},

Você solicitou um login com um clique na sua conta em {site_anchor}.

Clique no link abaixo ou copie e cole no seu navegador para entrar instantaneamente:
{link}

Este link expirará em 15 minutos. Se você não solicitou isso, ignore este e-mail.

Esta ação foi solicitada a partir do seguinte endereço IP: {ip_link}.

Atenciosamente,
-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Autenticação de dois fatores';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Hello {name},

Seu código de autenticação de dois fatores é: <strong>{code}</strong>

Você pode desativar a autenticação de dois fatores a qualquer momento nas configurações da sua conta.

Esta ação foi realizada a partir do seguinte endereço IP: {ip_link}.

Atenciosamente,
-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Solicitação de redefinição de senha';
$lang['emails_password_change_request_message'] = <<<EOT
Olá {name},

Você está recebendo este e-mail porque recebemos um pedido de redefinição de senha para sua conta no {site_anchor}.

Clique no seguinte link ou copie e cole no seu navegador se deseja prosseguir:
{link}

Se você não solicitou a redefinição de senha, nenhuma ação adicional é necessária.

Esta ação foi solicitada a partir do seguinte endereço IP: {ip_link}.

Atenciosamente,
-- Equipe {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Senha alterada com sucesso';
$lang['emails_password_change_success_message'] = <<<EOT
Olá {name},

Este e-mail confirma que sua senha no {site_anchor} foi alterada com sucesso. Agora você pode <a href="{login_url}" target="_blank" rel="noopener">fazer login</a> utilizando a nova senha.

Se você não realizou esta ação, por favor, entre em contato conosco o mais rápido possível para resolver esta questão.

Esta ação foi realizada a partir do seguinte endereço IP: {ip_link}.

Atenciosamente,
-- Equipe {site_name}.
EOT;
