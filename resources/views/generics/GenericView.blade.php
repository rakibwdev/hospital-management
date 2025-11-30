<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')
<head>
    <meta charset="UTF-8">
@section('title', 'Generics List')
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 30px;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        .table-container {
            width: 80%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 10px rgba(0,0,0,0.15);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 14px;
            text-align: left;
        }

        th {
            background: #007BFF;
            color: white;
            font-size: 15px;
        }

        tr:nth-child(even) {
            background: #fafafa;
        }

        tr:hover {
            background: #e8f2ff;
        }
    </style>
</head>
@section('content')
    
<body>

    <h1>All Generic Data</h1>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Generic Name</th>
                    <th>Details</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($generics as $generic)
                    <tr>
                        <td>{{ $generic->id }}</td>
                        <td>{{ $generic->name }}</td>
                        <td>{{ $generic->detail }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
@endsection

</html>
