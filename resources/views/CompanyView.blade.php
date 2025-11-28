<!DOCTYPE html>
<html>
<head>Company List</head>
<body>
    <h1>All Company Data</h1>
    <table border="1" cellpading="5" >
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Order</th>
        </tr>
        @foreach ($companys as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->order }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>