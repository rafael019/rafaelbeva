<?php

function customizar_tema($wp_customize)
{

    //Seção copyright
    $wp_customize->add_section('sec_redes_sociais', array(
        'title' => 'Redes Sociais', // Nome da Aba
        'description' => 'Adicione aqui os links das suas redes sociais' // Descrição da Aba
    ));
    // Configuração Github
    $wp_customize->add_setting('set_github', array(
        'type'    => 'theme_mod',
    ));
    // Controle Github
    $wp_customize->add_control('crtl_github', array(
        'label'       => 'Github',
        'description' => 'Informe o link do seu perfil do github',
        'section'     => 'sec_redes_sociais',
        'settings'    => 'set_github',
        'type'        => 'text'
    ));

    // Configuração Linkedin
    $wp_customize->add_setting('set_linkedin', array(
        'type'    => 'theme_mod',
    ));
    // Controle Linkedin
    $wp_customize->add_control('crtl_linkedin', array(
        'label'       => 'Linkedin',
        'description' => 'Informe o link do seu perfil do linkedin',
        'section'     => 'sec_redes_sociais',
        'settings'    => 'set_linkedin',
        'type'        => 'text'
    ));

    // Configuração E-mail
    $wp_customize->add_setting('set_email', array(
        'type'    => 'theme_mod',
    ));
    // Controle E-mail
    $wp_customize->add_control('crtl_email', array(
        'label'       => 'E-mail',
        'description' => 'Informe um e-mail de contato',
        'section'     => 'sec_redes_sociais',
        'settings'    => 'set_email',
        'type'        => 'text'
    ));


    //Seção Contato
    $wp_customize->add_section('sec_contato', array(
        'title' => 'Contato', // Nome da Aba
        'description' => 'Adicione aqui as informações de contato como telefone, endereço e horários de atendimento' // Descrição da Aba
    ));
    // Configuração Telefone
    $wp_customize->add_setting('set_telefone', array(
        'type'    => 'theme_mod',
        'default' => '(XX)XXXX-XXXX',
    ));
    // Controle Telefone
    $wp_customize->add_control('crtl_telefone', array(
        'label'       => 'Telefone',
        'description' => 'Informe o telefone(s) de contato da empresa',
        'section'     => 'sec_contato',
        'settings'    => 'set_telefone',
        'type'        => 'text'
    ));

    // Configuração Telefone
    $wp_customize->add_setting('set_endereco', array(
        'type'    => 'theme_mod',
        'default' => 'Seu endereço completo',
    ));
    // Controle Telefone
    $wp_customize->add_control('crtl_endereco', array(
        'label'       => 'Endereço',
        'description' => 'Informe seu endereço completo com Rua, Nº, Bairro, Cidade, Estado e CEP',
        'section'     => 'sec_contato',
        'settings'    => 'set_endereco',
        'type'        => 'textarea'
    ));

    // Configuração Telefone
    $wp_customize->add_setting('set_atendimento', array(
        'type'    => 'theme_mod',
        'default' => 'Horário de atendimento',
    ));
    // Controle Telefone
    $wp_customize->add_control('crtl_atendimento', array(
        'label'       => 'Atendimento',
        'description' => 'Informe o seu horário de atendimento',
        'section'     => 'sec_contato',
        'settings'    => 'set_atendimento',
        'type'        => 'textarea'
    ));
}

add_action('customize_register', 'customizar_tema');
