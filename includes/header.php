<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'M2 Motors - Meccanici automobilistici professionisti che offrono servizi e riparazioni di qualità nella tua zona'; ?>">
    <meta name="keywords" content="<?php echo isset($page_keywords) ? $page_keywords : 'automobilistico, meccanici, riparazione auto, manutenzione veicoli'; ?>">
    <meta name="format-detection" content="telephone=no">
    <title><?php echo isset($page_title) ? $page_title : 'M2 Motors - Meccanici Automobilistici Professionisti'; ?></title>
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/main.css">
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/mobile.css">
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/custom-colors.css">
    <link rel="icon" href="<?php echo $base_path; ?>favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php if(isset($additional_head_content)) echo $additional_head_content; ?>
</head>
<body>
    <?php if(isset($show_fixed_logo) && $show_fixed_logo): ?>
    <div class="fixed-logo-container">
        <div class="fixed-logo"></div>
    </div>
    <?php endif; ?>
    
    <header>
        <div class="container header-container">
            <div class="logo desktop-only-logo">
                <a href="<?php echo $base_path; ?>index.php">
                    <img src="<?php echo $base_path; ?>images/logo.jpg" alt="Logo M2 Motors">
                </a>
            </div>
            <nav class="main-nav">
                <button class="mobile-menu-toggle" aria-label="Apri menu">
                    <span class="hamburger"></span>
                </button>
                <ul class="nav-list">
                    <li><a href="<?php echo $base_path; ?>index.php" <?php echo ($current_page == 'home') ? 'class="active"' : ''; ?>>Home</a></li>
                    <li><a href="<?php echo $base_path; ?>pages/about.php" <?php echo ($current_page == 'about') ? 'class="active"' : ''; ?>>Chi Siamo</a></li>
                    <li><a href="<?php echo $base_path; ?>pages/services.php" <?php echo ($current_page == 'services') ? 'class="active"' : ''; ?>>Servizi</a></li>
                    <li><a href="<?php echo $base_path; ?>pages/gallery.php" <?php echo ($current_page == 'gallery') ? 'class="active"' : ''; ?>>Galleria</a></li>
                    <li><a href="<?php echo $base_path; ?>pages/contact.php" <?php echo ($current_page == 'contact') ? 'class="active"' : ''; ?>>Contatti</a></li>
                </ul>
            </nav>
        </div>
    </header>
