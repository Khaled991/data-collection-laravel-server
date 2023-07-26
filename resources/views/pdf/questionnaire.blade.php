<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      font-family: 'Vazirmatn', Arial, sans-serif;
      line-height: 1.6;
      margin: 20px;
      background-color: #f7f7f7;
      color: #333;
      font-size: 18.0px;
    }

    h1 {
      color: #7C69EF;
      border-bottom: 2px solid #7C69EF;
      padding-bottom: 5px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    h2 {
      color: #7C69EF;
      margin-top: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    th,
    td {
      border: 1px solid #ccc;

    }

    th,
    td {
      padding: 10px;
      text-align: left;
    }

    /* Handle RTL direction */
    body[dir="rtl"] {
      direction: rtl;
    }

    table[dir="rtl"] {
      margin-right: 0;
      margin-left: auto;
    }

    th[dir="rtl"],
    td[dir="rtl"] {
      text-align: right;
    }
  </style>
  <title>{{ $title }}</title>
</head>

<body dir="rtl">

  <h1>{{ $title }}</h1>
  <table dir="rtl">
    <tr>
      <th dir="rtl">اسم المعبئ</th>
      <td dir="rtl">{{ $name }}</td>
    </tr>
    <tr>
      <th dir="rtl">البريد الالكتروني للمعبئ</th>
      <td dir="rtl">{{ $email }}</td>
    </tr>
    <tr>
      <th dir="rtl">المنطقة</th>
      <td dir="rtl">{{ $region }}</td>
    </tr>
    <tr>
      <th dir="rtl">المدينة</th>
      <td dir="rtl">{{ $city }}</td>
    </tr>
    <tr>
      <th dir="rtl">القرية</th>
      <td dir="rtl">{{ $village }}</td>
    </tr>
    <tr>
      <th dir="rtl">المنظمة</th>
      <td dir="rtl">{{ $organization }}</td>
    </tr>
  </table>

  <h2>الأسئلة المقالية</h2>
  <table>
    @foreach($textQuestions as $textQuestion)
    <tr>
      <td colspan="3" dir="rtl"><strong>{{ $textQuestion['questionTitle'] }}</strong></td>
    </tr>
    <tr>
      <td colspan="2" dir="rtl">{{ $textQuestion['question'] }}</td>
      <td dir="rtl">{{ $textQuestion['answer'] }}</td>
    </tr>
    @endforeach
  </table>

  <h2>أسئلة الاختيار من متعدد</h2>
  <table>
    @foreach($multipleChoiceQuestions as $multipleChoiceQuestion)
    <tr>
      <td colspan="2" dir="rtl"><strong>{{ $multipleChoiceQuestion['questionTitle'] }}</strong></td>
    </tr>
    <tr>
      <td colspan="2" dir="rtl">{{ $multipleChoiceQuestion['question'] }}</td>
    </tr>
    <tr>
      <td dir="rtl">الإجابة</td>
      <td dir="rtl">{{ $multipleChoiceQuestion['answer'] }}</td>
    </tr>
    <tr>
      <td dir="rtl">التوضيح</td>
      <td dir="rtl">{{ $multipleChoiceQuestion['clarification'] }}</td>
    </tr>
    <tr>
      <td dir="rtl">الخيارات</td>
      <td dir="rtl">
        <ul>
          @foreach($multipleChoiceQuestion['options'] as $option)
          <li>{{ $option }}</li>
          @endforeach
        </ul>
      </td>
    </tr>
    @endforeach
  </table>

  <h2>أسئلة متعددة الاجابات</h2>
  <table>
    @foreach($multipleAnswersQuestions as $multipleAnswersQuestion)
    <tr>
      <td colspan="2" dir="rtl"><strong>{{ $multipleAnswersQuestion['questionTitle'] }}</strong></td>
    </tr>
    <tr>
      <td colspan="2" dir="rtl">{{ $multipleAnswersQuestion['question'] }}</td>
    </tr>
    <tr>
      <td dir="rtl">التوضيح</td>
      <td dir="rtl">{{ $multipleAnswersQuestion['clarification'] }}</td>
    </tr>
    <tr>
      <td dir="rtl">الإجابات</td>
      <td dir="rtl">
        <ul>
          @foreach($multipleAnswersQuestion['answers'] as $answer)
          <li>{{ $answer }}</li>
          @endforeach
        </ul>
      </td>
    </tr>
    @endforeach
  </table>
</body>

</html>