# 🛒 Sistem POS Otoklix (GMS)
> Sistem Point of Sales terintegrasi untuk manajemen bengkel otomotif

![Python](https://img.shields.io/badge/Python-3776AB?style=flat&logo=python&logoColor=white)
![Django](https://img.shields.io/badge/Django-092E20?style=flat&logo=django&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)
![RabbitMQ](https://img.shields.io/badge/RabbitMQ-FF6600?style=flat&logo=rabbitmq&logoColor=white)
![React](https://img.shields.io/badge/React-20232A?style=flat&logo=react&logoColor=61DAFB)
![Backend](https://img.shields.io/badge/Role-Backend%20Engineer-blue)

---

## 🎯 Gambaran Proyek

**Durasi:** Maret 2023 - Juni 2023  
**Peran:** Backend Engineer  
**Perusahaan:** Otoklix Indonesia

**Aplikasi POS Otoklix** adalah sistem berbasis web yang saya kembangkan sebagai bagian dari inisiatif digitalisasi di ekosistem Otoklix. Proyek ini bertujuan menyediakan solusi kasir modern untuk bengkel-bengkel yang terintegrasi langsung dengan **database utama Otoklix**, memungkinkan manajemen transaksi dan inventori real-time dengan efisiensi yang ditingkatkan.

---

## 🚀 Tantangan yang Dihadapi

<details>
<summary><strong>Masalah Operasional Bengkel Pra-Digital</strong></summary>

Sebelum adanya aplikasi POS ini, bengkel-bengkel dalam ekosistem Otoklix menghadapi kendala operasional yang signifikan:

- **Integrasi Terbatas:** Sistem penjualan di bengkel belum terhubung langsung dengan database utama Otoklix, menyebabkan keterlambatan sinkronisasi data
- **Inventory Manual:** Manajemen stok dilakukan secara manual, rentan terhadap keterlambatan update dan kesalahan pencatatan
- **Keterpisahan Sistem:** Belum ada sistem tunggal untuk mengelola transaksi, inventory, dan laporan secara terintegrasi
- **Efisiensi Operasional Rendah:** Tanpa digitalisasi, laporan keuangan dan stok barang memakan banyak waktu untuk dikompilasi

</details>

---

## 💡 Solusi: Aplikasi POS Otoklix Terintegrasi

```mermaid
graph TD
    A[Interface POS Bengkel] --> B[Manajemen Transaksi]
    A --> C[Manajemen Inventory]
    A --> D[Sistem Pelaporan]
    
    B --> E[Sinkronisasi Database Real-time]
    C --> F[Update Stok Otomatis]
    D --> G[Laporan Penjualan Harian]
    
    E --> H[Database Utama Otoklix]
    F --> H
    G --> H
    
    I[Background Processing] --> J[RabbitMQ Queue]
    J --> K[Sinkronisasi Data]
    
    style A fill:#e3f2fd
    style H fill:#f3e5f5
    style I fill:#e8f5e8
```

Untuk mengatasi tantangan tersebut, saya berkolaborasi dengan tim mengembangkan **aplikasi POS berbasis web** yang dapat digunakan langsung di bengkel-bengkel mitra Otoklix.

### 🔧 Fitur & Kemampuan Utama

#### **Integrasi Database Real-Time**
- Seluruh transaksi terhubung langsung dengan database utama Otoklix
- Sinkronisasi data penjualan instan di seluruh ekosistem

#### **Manajemen Inventory Otomatis**
- Stok terupdate otomatis setiap ada transaksi penjualan
- Pelacakan dan manajemen inventory real-time

#### **Fitur POS Standar**
- Input transaksi penjualan
- Cetak struk
- Laporan penjualan harian
- Kompilasi data transaksi untuk analisis bisnis

#### **Arsitektur Berbasis Web**
- Aplikasi dapat diakses melalui browser tanpa perlu instalasi tambahan di perangkat kasir
- Kompatibilitas lintas platform dan deployment mudah

---

## 🛠️ Kontribusi Teknis Saya

### Peran Backend Engineer

Pada proyek ini saya memegang tanggung jawab penuh untuk **pengembangan backend**.

#### 1. **Penyediaan REST API**
Saya mengembangkan berbagai **endpoint API** yang digunakan oleh aplikasi POS, meliputi:
- API transaksi penjualan
- API manajemen inventory
- API laporan keuangan dan transaksi harian

#### 2. **Integrasi Sistem ERP**
Saya merancang backend agar terhubung langsung dengan database ERP Otoklix, memungkinkan manajemen inventory yang sebelumnya manual kini dapat **sinkron otomatis** dengan transaksi POS.

#### 3. **Background Processing**
Menggunakan **RabbitMQ**, saya menyiapkan sistem queue untuk menangani proses background, seperti sinkronisasi data berskala besar atau laporan periodik.

---

## 📊 Hasil & Status Proyek

```mermaid
timeline
    title Timeline Pengembangan Proyek
    Maret 2023 : Pengembangan API Backend
               : Desain Skema Database
    April 2023 : Integrasi ERP
               : Setup Background Processing
    Mei 2023   : Integrasi Frontend
               : Testing & QA
    Juni 2023  : Testing Internal Selesai
               : Keputusan Bisnis Pending
```

Meskipun proyek ini berhasil dibangun hingga tahap testing internal, aplikasi POS Otoklix **belum sempat rilis ke production** karena pertimbangan dan faktor bisnis di sisi perusahaan.

Namun, dari sisi teknis, aplikasi ini telah menunjukkan:

| Metrik | Sebelum POS Otoklix | Setelah POS Otoklix (Testing Internal) |
|--------|--------------------|------------------------------------|
| **Integrasi Data** | Terpisah, update manual | **Otomatis & real-time** |
| **Manajemen Inventory** | Manual & rentan error | **Terintegrasi dengan transaksi** |
| **Pelaporan** | Kompilasi manual | **Digital & instan** |

---

## 🔧 Technology Stack

```mermaid
graph LR
    A[Python Django] --> B[REST API]
    B --> C[MySQL Database]
    C --> D[RabbitMQ Queue]
    D --> E[Background Jobs]
    
    F[React Frontend] --> B
    G[Nginx] --> A
    
    style A fill:#3776AB
    style F fill:#61DAFB
    style C fill:#4479A1
    style D fill:#FF6600
    style G fill:#009639
```

- **Backend:** Python (Django Framework)
- **Frontend:** React.js (Web-based POS UI)
- **Database:** MySQL
- **Message Broker/Background Process:** RabbitMQ
- **Web Server & Infrastructure:** Nginx

---

## 🎉 Pencapaian Utama

✅ **Integrasi Real-time** - Menghubungkan operasi bengkel dengan database utama Otoklix  
✅ **Inventory Otomatis** - Menghilangkan kesalahan manajemen stok manual  
✅ **Background Processing** - Mengimplementasikan sistem queue scalable untuk operasi berat  
✅ **Arsitektur API-First** - Membangun fondasi REST API yang robust  
✅ **Kompatibilitas Lintas Platform** - Solusi berbasis web dapat diakses dari perangkat apapun  
✅ **Integrasi ERP** - Berhasil terhubung dengan sistem ERP Otoklix yang ada  

---

## 💡 Learning Teknis

Proyek ini menjadi fondasi penting untuk memahami:
- **Pola Integrasi Sistem ERP** dan best practices
- **Background job processing** dengan message queues
- **Tantangan sinkronisasi data real-time** dan solusinya
- **Desain API** untuk workflow bisnis yang kompleks
- **Kebutuhan digitalisasi bengkel** dan constraint-nya

---

*Proyek ini menjadi pijakan awal penting untuk pengembangan sistem ERP dan digitalisasi operasional bengkel di Otoklix, mendemonstrasikan kelayakan teknis solusi POS terintegrasi real-time.*
