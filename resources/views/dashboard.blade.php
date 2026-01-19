@extends('layouts.dashboard')

@section('content')

<style>
    /* Welcome Card - COMPACT & PRETTY */
    .welcome-card {
        background: linear-gradient(135deg, #ec4899 0%, #db2777 100%);
        border-radius: 12px;
        padding: 1.8rem;
        color: white;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 12px rgba(236, 72, 153, 0.3);
    }

    .welcome-card h2 {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 0.3rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .welcome-card p {
        font-size: 0.9rem;
        opacity: 0.95;
        margin-bottom: 1rem;
    }

    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .feature-list li {
        padding: 0.4rem 0;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.85rem;
    }

    .feature-list li::before {
        content: '✓';
        background: rgba(255,255,255,0.25);
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 12px;
    }

    /* Stats Cards - COMPACT */
    .stats-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .stat-card {
        background: white;
        border-radius: 10px;
        padding: 1.2rem;
        border-left: 3px solid #ec4899;
        box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        transition: all 0.2s ease;
    }

    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(236, 72, 153, 0.2);
    }

    .stat-icon {
        font-size: 2rem;
        margin-bottom: 0.6rem;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        color: #ec4899;
        margin-bottom: 0.3rem;
    }

    .stat-label {
        color: #6b7280;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
</style>

<div class="welcome-card">
    <h2>🏥 Selamat Datang di Posyandu Sejahtera</h2>
    <p><strong>Administrator</strong></p>
    <ul class="feature-list">
        <li>📊 Kelola transaksi posyandu secara real-time</li>
        <li>👨‍👩‍👧‍👦 Manajemen pelanggan dan layanan</li>
        <li>💡 Laporan keuangan terintegrasi</li>
    </ul>
</div>

<div class="stats-container">
    <div class="stat-card">
        <div class="stat-icon">👶</div>
        <div class="stat-number">{{ \App\Models\Balita::count() }}</div>
        <div class="stat-label">Total Balita</div>
    </div>
    
    <div class="stat-card">
        <div class="stat-icon">👨‍👩‍👧‍👦</div>
        <div class="stat-number">{{ \App\Models\Keluarga::count() }}</div>
        <div class="stat-label">Total Keluarga</div>
    </div>
    
    <div class="stat-card">
        <div class="stat-icon">⚖️</div>
        <div class="stat-number">{{ \App\Models\Penimbangan::count() }}</div>
        <div class="stat-label">Data Penimbangan</div>
    </div>
    
    <div class="stat-card">
        <div class="stat-icon">✅</div>
        <div class="stat-number">{{ \App\Models\Penimbangan::where('status_gizi', 'Gizi Baik')->count() }}</div>
        <div class="stat-label">Gizi Baik</div>
    </div>
</div>

@endsection