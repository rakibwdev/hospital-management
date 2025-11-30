<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')
<head>
    <meta charset="UTF-8">
@section('title','Company List')
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            padding: 30px;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #222;
            margin-bottom: 25px;
        }

        .table-container {
            width: 80%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.15);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background: #28a745;
            color: #fff;
            font-size: 15px;
        }

        tr:nth-child(even) {
            background: #f3f3f3;
        }

        tr:hover {
            background: #e8ffe7;
        }
    </style>
</head>
@section('content')
    
<body>

    <h1>All Company Data</h1>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Company Name</th>
                    <th>Order</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($companys as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->order }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
@endsection

</html>
