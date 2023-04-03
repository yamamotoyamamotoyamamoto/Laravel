<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>完了タスクの一覧</title>
    </head>

{{-- メインコンテンツ --}}
@section('contets')
        <table border="1">
        <tr>
            <th>タスク名
            <th>期限
            <th>重要度
            <th>タスク終了日
@foreach ($completed_tasks as $completed_task)
        <tr>
            <td>{{ $completed_task->name }}
            <td>{{ $completed_task->period }}
            <td>{{ $completed_task->priority }}
            <td>{{ $completed_task-> }}
@endforeach
        </table>

@endsection