@extends('layouts.landing')
@section('description', 'SMA PASUNDAN 3 adalah ....')
@section('keywords','sman, sma bandung , bandung, sma negeri, sman, sma pasundan 3, sma pasundan, pasunan, negeri pasundan')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.8/css/jquery.orgchart.min.css" rel="stylesheet">
    <style>
        #chart-container {
            text-align: center;
        }
        .orgchart {
            background: none;
        }
        .orgchart .node .title {
            font-weight: bold;
        }
        .orgchart .node .content {
            height: auto !important;
        }
        .orgchart .node .content img {
            display: block;
            margin: 0 auto;
            margin-top: 5px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .orgchart .node .content .name {
            margin-top: 5px;
        }
    </style>
@endsection

@section('content')
<!-- Breadcrumb Area-->
<div class="breadcrumb-wrapper bg-img bg-overlay" style="background-image: url('{{asset('img/bg-img/7.jpg')}}');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title">Struktur Organisasi</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-60 d-block"></div>
<div class="container mt-5 text-center">
    <div class="row align-item-center justify-content-center">
        <div class="col-md-6 align-item-center">
            <div class="aboutUs-thumbnail text-center mt-md-5"><img class="w-75" src="{{ asset('img/bg-img/5.jpg') }}" alt=""></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-1">
                <div class="card feature-card">
                    <div class="card-body d-flex align-items-center">
                        <div class="fea-text">
                            <h6>KBP. DR. drg. NELSON SITUMORANG, Sb.B.M.M., Subsp.T.M.T.M.J (K)., MH.Kes</h6>
                            <span>KARUMKIT BHAYANGKARA SARTIKA ASIH</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-120 d-block"></div>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div id="chart-container"></div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.8/js/jquery.orgchart.min.js"></script>
<script>
   
        var datasource = {
            'name': 'Kepala Sekolah',
            'title': 'Drs.W.Lesmana, M.M.Pdm M.Si',
            'image': 'https://via.placeholder.com/50',
            'children': [
                {
                    'name': 'Bendahara',
                    'title': 'Manager of Department 1',
                    'image': 'https://via.placeholder.com/50'
                },
                {
                    'name': 'Wakasek',
                    'title': '',
                    'image': 'none',
                    'children': [
                        { 'name': 'Wakasek Kurikulum', 'title': 'Lead of Team 2.1', 'image': 'https://via.placeholder.com/50',
                            'children': [{ 'name': 'Staf Wakasek Kurikulum', 'title': '1. nyimas \n 2. milan', 'image': 'noneWithLabel' }]
                        },
                        { 'name': 'Wakasek Humas', 'title': 'Lead of Team 2.2', 'image': 'https://via.placeholder.com/50' },
                        { 'name': 'Wakasek Sarpras', 'title': 'Lead of Team 2.3', 'image': 'https://via.placeholder.com/50',
                            'children': [{ 'name': 'Staf Wakasek Kurikulum', 'title': 'Lead of Team 2.4', 'image': 'noneWithLabel' }]
                        },
                        {   'name': 'Wakasek Kesiswaan', 'title': 'Lead of Team 2.4', 'image': 'https://via.placeholder.com/50',
                            'children': [{ 'name': 'Staf Wakasek Kurikulum', 'title': 'Lead of Team 2.4', 'image': 'noneWithLabel' }]
                         }
                    ]
                },
                {
                    'name': 'Wali Kelas',
                    'title': '',
                    'image': 'none',
                    'children': [
                        { 
                            'name': 'Guru', 
                            'title': 'Lead of Team 2.1',
                            'image': 'none',
                            'children': [{ 'name': 'Wakasek Kesiswaan', 'title': 'Lead  of Team 2.4', 
                                            'image': 'none',
                                            'children': [{ 'name': 'Peserta Didik', 'title': 'Lead of Team 2.4', 'image': 'none' }]
                                         }]
                        }
                    ]
                },
                {
                    'name': 'Kepala Tenaga ADM. Sekolah',
                    'title': 'Manager of Department 2',
                    'image': 'https://via.placeholder.com/50'
                }
            ]
        };

        $('#chart-container').orgchart({
            'data': datasource,
            'nodeContent': 'title',
            'createNode': function($node, data) {
                $node.children('.content').remove(); // Remove default content
                if (data.image === 'none') {
                    $node.append('<div class="content"></div>');
                } else if (data.image === 'noneWithLabel') {
                    $node.append('<div class="content"><div class="name">' + data.name + '</div></div>');
                } else {
                    $node.append('<div class="content"><img src="' + data.image + '" alt="Image"><div class="name">' + data.name + '</div></div>');
                }
            },
            'pan': true,
            'zoom': true
        });
   

</script>
@endsection