<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi</title>
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
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div id="chart-container"></div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.8/js/jquery.orgchart.min.js"></script>
<script>
    $(function() {
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
                            'children': [{ 'name': 'Staf Wakasek Kurilum', 'title': '1. nyimas \n 2. milan', 'image': 'noneWithLabel' }]
                        },
                        { 'name': 'Wakasek Humas', 'title': 'Lead of Team 2.2', 'image': 'https://via.placeholder.com/50' },
                        { 'name': 'Wakasek Sarpras', 'title': 'Lead of Team 2.3', 'image': 'https://via.placeholder.com/50',
                            'children': [{ 'name': 'Staf Wakasek Kurilum', 'title': 'Lead of Team 2.4', 'image': 'noneWithLabel' }]
                        },
                        {   'name': 'Wakasek Kesiswaan', 'title': 'Lead of Team 2.4', 'image': 'https://via.placeholder.com/50',
                            'children': [{ 'name': 'Staf Wakasek Kurilum', 'title': 'Lead of Team 2.4', 'image': 'noneWithLabel' }]
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
            'data' : datasource,
            'nodeContent': 'title',
            'createNode': function($node, data) {
                $node.children('.content').remove(); // Hapus konten default
                if (data.image === 'none') {
                    $node.append('<div class="content"></div>');
                }if (data.image === 'noneWithLabel'){
                    $node.append('<div class="content"> <div class="name">' + data.name + '</div></div>');

                }
                else{
                    $node.append('<div class="content"><img src="' + data.image + '" alt="Image"><div class="name">' + data.name + '</div></div>');
                }
            },
            'pan': true,
            'zoom': true
        });
    });
</script>
</body>
</html>
