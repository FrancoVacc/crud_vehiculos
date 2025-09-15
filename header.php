<div class="header">
    <div class="title">
        <h2>Crud - vehículos</h2>
    </div>
    <div class="users">
        <?php
        if (!isset($_SESSION['id'])) {
        ?>
            <button onclick="abrirModal()" class="btn btn-header">Iniciar Sesión</button>
        <?php
        } else { ?>
            <button class="btn btn-header" onclick="abrirMenu()"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                </svg>
            </button>
        <?php
        }
        ?>

    </div>
</div>