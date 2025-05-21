<!-- start style untuk merubah dasboard blade dan modal blade di front end-->
<style>
    /* Modal Logout Styles */
    .modal-dialog {
        max-width: 400px;
        margin: 1.75rem auto;
    }

    .modal-content {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        border: none;
        overflow: hidden;
        animation: fadeIn 0.5s ease-out;
        transition: transform 0.3s ease;
    }

    .modal-content:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
    }

    .modal-header {
        background: linear-gradient(90deg, #007bff, #00d4ff);
        border-bottom: none;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-title {
        color: #fff;
        font-size: 1.5rem;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .modal-header .close {
        background: transparent;
        border: none;
        color: #fff;
        font-size: 1.5rem;
        opacity: 0.8;
        transition: opacity 0.3s ease, transform 0.2s ease;
    }

    .modal-header .close:hover {
        opacity: 1;
        transform: rotate(90deg);
    }

    .modal-header .close span {
        line-height: 1;
    }

    .modal-body {
        padding: 20px;
        text-align: center;
    }

    .modal-body p {
        font-size: 1.1rem;
        color: #333;
        margin: 0;
    }

    .modal-footer {
        border-top: none;
        padding: 15px 20px;
        background: rgba(255, 255, 255, 0.1);
        display: flex;
        justify-content: space-between;
    }

    .btn {
        padding: 10px 20px;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 500;
        transition: background 0.3s ease, transform 0.2s ease, box Angka: 0
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn-default {
        background: #f1f1f1;
        color: #555;
        border: 1px solid #ddd;
    }

    .btn-default:hover {
        background: #e0e0e0;
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .btn-danger {
        background: linear-gradient(90deg, #dc3545, #ff6b6b);
        color: #fff;
        border: none;
    }

    .btn-danger:hover {
        background: linear-gradient(90deg, #b02a37, #ff4d4d);
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .btn:active {
        transform: scale(0.95);
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Backdrop Styling */
    .modal-backdrop {
        background: rgba(0, 0, 0, 0.6);
    }
</style> 
<!-- end style untuk merubah dasboard blade dan modal blade di front end-->

<div class="modal fade" id="modal-logout">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pemberitahuan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Keluar dari sistem?</p>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Keluar</button>
            </div>
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<div class="modal" id="modal-loading">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Sedang memuat data...</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <center>
            <img src="{{ asset(Setting::getValue('app_loading_gif')) }}" alt="{{ Setting::getName('app_loading_gif') }}" class="img" width="200">
        </center>
        </div>
    </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
    <!-- jQuery -->
    <!-- <script src="{{ asset('template/admin/plugins/jquery/jquery.min.js') }}"></script> -->
    <!-- Bootstrap 4 -->
