</html>
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
  <title>{{ $data['title'] }}</title>
</head>

<body dir="rtl">

  <h1>{{ $data['title'] }}</h1>
  <table dir="rtl">
    <tr>
      <th dir="rtl">اسم المعبئ</th>
      <td dir="rtl">{{ $data['name'] }}</td>
    </tr>
    <tr>
      <th dir="rtl">البريد الالكتروني للمعبئ</th>
      <td dir="rtl">{{ $data['email'] }}</td>
    </tr>
    <tr>
      <th dir="rtl">المنطقة</th>
      <td dir="rtl">{{ $data['region'] }}</td>
    </tr>
    <tr>
      <th dir="rtl">المدينة</th>
      <td dir="rtl">{{ $data['city'] }}</td>
    </tr>
    <tr>
      <th dir="rtl">القرية</th>
      <td dir="rtl">{{ $data['village'] }}</td>
    </tr>
    <tr>
      <th dir="rtl">المنظمة</th>
      <td dir="rtl">{{ $data['organization'] }}</td>
    </tr>
  </table>

  @if(count($data['textQuestions']))
  <h2>الأسئلة المقالية</h2>
  <table>
    @foreach($data['textQuestions'] as $textQuestion)
    <tr>
      <td dir="rtl">السؤال</td>
      <td colspan="2" dir="rtl">{{ $textQuestion['question'] }}</td>
    </tr>
    <tr>
      <td dir="rtl">الإجابة</td>
      <td dir="rtl">{{ $textQuestion['answer'] }}</td>
    </tr>
    @endforeach
  </table>
  @endif

  @if(count($data['choose_questions']))
  <h2>أسئلة الاختيار من متعدد</h2>
  <table>
    @foreach($data['choose_questions'] as $multipleChoiceQuestion)
    <tr>
      <td dir="rtl">السؤال</td>
      <td colspan="2" dir="rtl">{{ $multipleChoiceQuestion['question'] }}</td>
    </tr>
    <tr>
      <td dir="rtl">الإجابة</td>
      <td dir="rtl">{{ $multipleChoiceQuestion['chosen_option'] }}</td>
    </tr>
    @if ($multipleChoiceQuestion['text_response'])
    <tr>
      <td dir="rtl">التوضيح</td>
      <td dir="rtl">{{ $multipleChoiceQuestion['text_response'] }}</td>
    </tr>
    @endif
    @endforeach
  </table>
  @endif
  @if(count($data['multiple_answers_questions']))
  <h2>أسئلة متعددة الاجابات</h2>
  <table>
    @foreach($data['multiple_answers_questions'] as $multipleAnswersQuestion)
    <tr>
      <td dir="rtl">السؤال</td>
      <td colspan="2" dir="rtl">{{ $multipleAnswersQuestion['question'] }}</td>
    </tr>
    <tr>

    </tr>
    <tr>
      <td dir="rtl">الإجابة</td>
      <td dir="rtl">
        <ul>
          @foreach($multipleAnswersQuestion['answers'] as $answer)
          <li>{{ $answer['chosen_answer'] }}</li>
          @endforeach
        </ul>
      </td>
    </tr>
    @if($multipleAnswersQuestion['answers'][0]['text_response'])
    <tr>
      <td dir="rtl">التوضيح</td>
      <td dir="rtl">{{ $multipleAnswersQuestion['answers'][0]['text_response'] }}</td>
    </tr>
    @endif

    @endforeach
  </table>
  @endif

</body>

</html>