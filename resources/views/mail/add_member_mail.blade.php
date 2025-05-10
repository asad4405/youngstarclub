<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Youngstar Profile PDF</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
    }

    .profile-container {
      max-width: 900px;
      margin: auto;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .profile-header {
      background: blue;
      color: white;
      text-align: center;
      padding: 80px 20px 30px;
      position: relative;
    }

    .profile-header img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid #fff;
      margin-top: -50px;
    }

    .profile-header h2 {
      margin-top: 20px;
      color: white;
    }
    .profile-header p {
      margin-top: 16px;
      color: white;
      text-align: center
    }

    .profile-body {
      padding: 40px 30px 30px;
    }

    .profile-body table {
      width: 100%;
      font-size: 16px;
    }

    .profile-body td {
      width: 50%;
      vertical-align: top;
      padding-right: 20px;
    }

    .profile-body strong {
      color: #6c757d;
    }
  </style>
</head>
<body>
  <div class="profile-container">

    <!-- Header -->
    <div class="profile-header">
      <img src="{{ asset($image) }}" alt="Profile Picture">
      <h2>Youngstar Club - {{ $name }} Profile</h2>
      <p> Your Email : {{ $email }}</p>
      <p> Your Password : {{ $password }}</p>
    </div>

    <!-- Body -->
    <div class="profile-body">
      <table>
        <tr>
          <td>
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Father's Name:</strong> {{ $father_name }}</p>
            <p><strong>Mother's Name:</strong> {{ $mother_name }}</p>
            <p><strong>Phone:</strong> {{ $phone }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Birthday:</strong> {{ $birthday_date }}</p>
            <p><strong>Nationality:</strong> Bangladeshi</p>
          </td>
          <td>
            <p><strong>Religion:</strong> Islam</p>
            <p><strong>Profession:</strong> {{ $profession }}</p>
            <p><strong>Blood Group:</strong> {{ $blood_group }}</p>
            <p><strong>Education:</strong> {{ $education }}</p>
            <p><strong>NID / Birth Reg. Card:</strong> {{ $id_card }}</p>
            <p><strong>Present Address:</strong> {{ $present_address }}</p>
            <p><strong>Permanent Address:</strong> {{ $permanent_address }}</p>
          </td>
        </tr>
      </table>
    </div>

  </div>

</body>
</html>

{{-- <body>
    <h1>Member Information</h1>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Father's Name:</strong> {{ $father_name }}</p>
    <p><strong>Mother's Name:</strong> {{ $mother_name }}</p>
    <p><strong>Phone:</strong> {{ $phone }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Birthday:</strong> {{ $birthday_date }}</p>
    <p><strong>Present Address:</strong> {{ $present_address }}</p>
    <p><strong>ID Card:</strong> {{ $id_card }}</p>
    <p><strong>Nationality:</strong> {{ $nationality }}</p>
    <p><strong>Religion:</strong> {{ $religion }}</p>
    <p><strong>Profession:</strong> {{ $profession }}</p>
    <p><strong>Blood Group:</strong> {{ $blood_group }}</p>
    <p><strong>Education:</strong> {{ $education }}</p>
    <p><strong>Image:</strong> {{ $image }}</p>
    <p><strong>Image:</strong> <img src="{{ asset($image) }}" alt="Member Image"></p>
</body>
</html> --}}
