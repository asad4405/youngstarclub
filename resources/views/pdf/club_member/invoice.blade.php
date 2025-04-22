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
      <img src="{{ base_path($member->image) }}" alt="Profile Picture">
      <h2>Youngstar Club - {{ $member->name }} Profile</h2>
    </div>

    <!-- Body -->
    <div class="profile-body">
      <table>
        <tr>
          <td>
            <p><strong>Name:</strong> {{ $member->name }}</p>
            <p><strong>Father's Name:</strong> {{ $member->father_name }}</p>
            <p><strong>Mother's Name:</strong> {{ $member->mother_name }}</p>
            <p><strong>Phone:</strong> {{ $member->phone }}</p>
            <p><strong>Email:</strong> {{ $member->email }}</p>
            <p><strong>Birthday:</strong> {{ $member->birthday_date }}</p>
            <p><strong>Nationality:</strong> Bangladeshi</p>
          </td>
          <td>
            <p><strong>Religion:</strong> Islam</p>
            <p><strong>Profession:</strong> {{ $member->profession }}</p>
            <p><strong>Blood Group:</strong> {{ $member->blood_group }}</p>
            <p><strong>Education:</strong> {{ $member->education }}</p>
            <p><strong>NID / Birth Reg. Card:</strong> {{ $member->id_card }}</p>
            <p><strong>Present Address:</strong> {{ $member->present_address }}</p>
            <p><strong>Permanent Address:</strong> {{ $member->permanent_address }}</p>
          </td>
        </tr>
      </table>
    </div>

  </div>

</body>
</html>
