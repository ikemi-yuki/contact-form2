@extends('layouts.app')

@section('css')
<link href="{{ asset('css/confirm.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="confirm-content">
    <div class="confirm-content__header">
        <h2>お問い合わせ内容確認</h2>
    </div>
    <form class="confirm-form">
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        お名前
                    </th>
                    <td class="confirm-table__text">
                        <input class="confirm-table__text-input" type="text" name="name" value="">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        メールアドレス
                    </th>
                    <td class="confirm-table__text">
                        <input class="confirm-table__text-input" type="mail" name="mail" value="">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <input class="confirm-table__text-input" type="tel" name="tel" value="">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <input class="confirm-table__text-input" type="text" name="content" value="">
                    </td>
                </tr>
            </table>
        </div>
        <div class="confirm-form__button">
            <button class="confirm-form__button-submit">送信</button>
        </div>
    </form>
</div>
@endsection
