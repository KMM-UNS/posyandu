@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])



@section('content')
    <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
        <meta name="author" content="user" />
        <style type="text/css">
            html {
                font-family: Calibri, Arial, Helvetica, sans-serif;
                font-size: 11pt;
                background-color: white
            }

            a.comment-indicator:hover+div.comment {
                background: #ffd;
                position: absolute;
                display: block;
                border: 1px solid black;
                padding: 0.5em
            }

            a.comment-indicator {
                background: red;
                display: inline-block;
                border: 1px solid black;
                width: 0.5em;
                height: 0.5em
            }

            div.comment {
                display: none
            }

            table {
                border-collapse: collapse;
                page-break-after: always
            }

            .gridlines td {
                border: 1px dotted black
            }

            .gridlines th {
                border: 1px dotted black
            }

            .b {
                text-align: center
            }

            .e {
                text-align: center
            }

            .f {
                text-align: right
            }

            .inlineStr {
                text-align: left
            }

            .n {
                text-align: right
            }

            .s {
                text-align: left
            }

            td.style0 {
                vertical-align: bottom;
                border-bottom: none #000000;
                border-top: none #000000;
                border-left: none #000000;
                border-right: none #000000;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: white
            }

            th.style0 {
                vertical-align: bottom;
                border-bottom: none #000000;
                border-top: none #000000;
                border-left: none #000000;
                border-right: none #000000;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: white
            }

            td.style1 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: white
            }

            th.style1 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: white
            }

            td.style2 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFC000
            }

            th.style2 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFC000
            }

            td.style3 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFD965
            }

            th.style3 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFD965
            }

            td.style4 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFF2CB
            }

            th.style4 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFF2CB
            }

            td.style5 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #BF9000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFD965
            }

            th.style5 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #BF9000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFD965
            }

            td.style6 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #BF9000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFF2CB
            }

            th.style6 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #BF9000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFF2CB
            }

            td.style7 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FF0000
            }

            th.style7 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FF0000
            }

            td.style8 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFE598
            }

            th.style8 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFE598
            }

            td.style9 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFFF00
            }

            th.style9 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFFF00
            }

            td.style10 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FF00FF
            }

            th.style10 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FF00FF
            }

            td.style11 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FF99FF
            }

            th.style11 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FF99FF
            }

            td.style12 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFCCFF
            }

            th.style12 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #FFCCFF
            }

            td.style13 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #B4C6E7
            }

            th.style13 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #B4C6E7
            }

            td.style14 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #C5DEB5
            }

            th.style14 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #000000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #C5DEB5
            }

            td.style15 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #BF9000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #BF9000
            }

            th.style15 {
                vertical-align: bottom;
                border-bottom: 1px solid #000000 !important;
                border-top: 1px solid #000000 !important;
                border-left: 1px solid #000000 !important;
                border-right: 1px solid #000000 !important;
                color: #BF9000;
                font-family: 'Calibri';
                font-size: 11pt;
                background-color: #BF9000
            }

            table.sheet0 col.col0 {
                width: 82.68888794pt
            }

            table.sheet0 col.col1 {
                width: 42pt
            }

            table.sheet0 col.col2 {
                width: 42pt
            }

            table.sheet0 col.col3 {
                width: 42pt
            }

            table.sheet0 col.col4 {
                width: 42pt
            }

            table.sheet0 col.col5 {
                width: 42pt
            }

            table.sheet0 col.col6 {
                width: 42pt
            }

            table.sheet0 col.col7 {
                width: 42pt
            }

            table.sheet0 col.col8 {
                width: 42pt
            }

            table.sheet0 col.col9 {
                width: 42pt
            }

            table.sheet0 col.col10 {
                width: 42pt
            }

            table.sheet0 col.col11 {
                width: 42pt
            }

            table.sheet0 col.col12 {
                width: 42pt
            }

            table.sheet0 col.col13 {
                width: 42pt
            }

            table.sheet0 col.col14 {
                width: 42pt
            }

            table.sheet0 col.col15 {
                width: 42pt
            }

            table.sheet0 col.col16 {
                width: 42pt
            }

            table.sheet0 col.col17 {
                width: 42pt
            }

            table.sheet0 col.col18 {
                width: 42pt
            }

            table.sheet0 col.col19 {
                width: 42pt
            }

            table.sheet0 col.col20 {
                width: 42pt
            }

            table.sheet0 col.col21 {
                width: 42pt
            }

            table.sheet0 col.col22 {
                width: 42pt
            }

            table.sheet0 col.col23 {
                width: 42pt
            }

            table.sheet0 col.col24 {
                width: 42pt
            }

            table.sheet0 tr {
                height: 15pt
            }
        </style>
    </head>

    <body>
        <style>
            @page {
                margin-left: 0.7in;
                margin-right: 0.7in;
                margin-top: 0.75in;
                margin-bottom: 0.75in;
            }

            body {
                margin-left: 0.7in;
                margin-right: 0.7in;
                margin-top: 0.75in;
                margin-bottom: 0.75in;
            }
        </style>
        <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">

            <tr class="row1">
                <td class="column0 style1 s">Kunjungan ke</td>
                <td class="column1 style1 n">1</td>
                <td class="column2 style1 n">2</td>
                <td class="column3 style1 n">3</td>
                <td class="column4 style1 n">4</td>
                <td class="column5 style1 n">5</td>
                <td class="column6 style1 n">6</td>
                <td class="column7 style1 n">7</td>
                <td class="column8 style1 n">8</td>
                <td class="column9 style1 n">9</td>
                <td class="column10 style1 n">10</td>
                <td class="column11 style1 n">11</td>
                <td class="column12 style1 n">12</td>
                <td class="column13 style1 n">13</td>
                <td class="column14 style1 n">14</td>
                <td class="column15 style1 n">15</td>
                <td class="column16 style1 n">16</td>
                <td class="column17 style1 n">17</td>
                <td class="column18 style1 n">18</td>
                <td class="column19 style1 n">19</td>
                <td class="column20 style1 n">20</td>
                <td class="column21 style1 n">21</td>
                <td class="column22 style1 n">22</td>
                <td class="column23 style1 n">23</td>
                <td class="column24 style1 n">24</td>
            </tr>
            <tr class="row2">
                <td class="column0 style1 null"></td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row3">
                <td class="column0 style1 s">Tanggal</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row4">
                <td class="column0 style1 null"></td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row5">
                <td class="column0 style1 s">Kegiatan Sehari-hari</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row6">
                <td class="column0 style1 s">Kategori A</td>
                <td class="column1 style2 null"></td>
                <td class="column2 style2 null"></td>
                <td class="column3 style2 null"></td>
                <td class="column4 style2 null"></td>
                <td class="column5 style2 null"></td>
                <td class="column6 style2 null"></td>
                <td class="column7 style2 null"></td>
                <td class="column8 style2 null"></td>
                <td class="column9 style2 null"></td>
                <td class="column10 style2 null"></td>
                <td class="column11 style2 null"></td>
                <td class="column12 style2 null"></td>
                <td class="column13 style2 null"></td>
                <td class="column14 style2 null"></td>
                <td class="column15 style2 null"></td>
                <td class="column16 style2 null"></td>
                <td class="column17 style2 null"></td>
                <td class="column18 style2 null"></td>
                <td class="column19 style2 null"></td>
                <td class="column20 style2 null"></td>
                <td class="column21 style2 null"></td>
                <td class="column22 style2 null"></td>
                <td class="column23 style2 null"></td>
                <td class="column24 style2 null"></td>
            </tr>
            <tr class="row7">
                <td class="column0 style1 s">Kategori B</td>
                <td class="column1 style3 null"></td>
                <td class="column2 style3 null"></td>
                <td class="column3 style3 null"></td>
                <td class="column4 style3 null"></td>
                <td class="column5 style3 null"></td>
                <td class="column6 style3 null"></td>
                <td class="column7 style3 null"></td>
                <td class="column8 style3 null"></td>
                <td class="column9 style3 null"></td>
                <td class="column10 style3 null"></td>
                <td class="column11 style3 null"></td>
                <td class="column12 style3 null"></td>
                <td class="column13 style3 null"></td>
                <td class="column14 style3 null"></td>
                <td class="column15 style3 null"></td>
                <td class="column16 style3 null"></td>
                <td class="column17 style3 null"></td>
                <td class="column18 style3 null"></td>
                <td class="column19 style3 null"></td>
                <td class="column20 style3 null"></td>
                <td class="column21 style3 null"></td>
                <td class="column22 style3 null"></td>
                <td class="column23 style3 null"></td>
                <td class="column24 style3 null"></td>
            </tr>
            <tr class="row8">
                <td class="column0 style1 s">Kategori C</td>
                <td class="column1 style4 null"></td>
                <td class="column2 style4 null"></td>
                <td class="column3 style4 null"></td>
                <td class="column4 style4 null"></td>
                <td class="column5 style4 null"></td>
                <td class="column6 style4 null"></td>
                <td class="column7 style4 null"></td>
                <td class="column8 style4 null"></td>
                <td class="column9 style4 null"></td>
                <td class="column10 style4 null"></td>
                <td class="column11 style4 null"></td>
                <td class="column12 style4 null"></td>
                <td class="column13 style4 null"></td>
                <td class="column14 style4 null"></td>
                <td class="column15 style4 null"></td>
                <td class="column16 style4 null"></td>
                <td class="column17 style4 null"></td>
                <td class="column18 style4 null"></td>
                <td class="column19 style4 null"></td>
                <td class="column20 style4 null"></td>
                <td class="column21 style4 null"></td>
                <td class="column22 style4 null"></td>
                <td class="column23 style4 null"></td>
                <td class="column24 style4 null"></td>
            </tr>
            <tr class="row9">
                <td class="column0 style1 null"></td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row10">
                <td class="column0 style1 s">Status Mental</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row11">
                <td class="column0 style1 s">Ada</td>
                <td class="column1 style5 null"></td>
                <td class="column2 style5 null"></td>
                <td class="column3 style5 null"></td>
                <td class="column4 style5 null"></td>
                <td class="column5 style5 null"></td>
                <td class="column6 style5 null"></td>
                <td class="column7 style5 null"></td>
                <td class="column8 style5 null"></td>
                <td class="column9 style5 null"></td>
                <td class="column10 style5 null"></td>
                <td class="column11 style5 null"></td>
                <td class="column12 style5 null"></td>
                <td class="column13 style5 null"></td>
                <td class="column14 style5 null"></td>
                <td class="column15 style5 null"></td>
                <td class="column16 style5 null"></td>
                <td class="column17 style5 null"></td>
                <td class="column18 style5 null"></td>
                <td class="column19 style5 null"></td>
                <td class="column20 style5 null"></td>
                <td class="column21 style5 null"></td>
                <td class="column22 style5 null"></td>
                <td class="column23 style5 null"></td>
                <td class="column24 style5 null"></td>
            </tr>
            <tr class="row12">
                <td class="column0 style1 s">Tidak</td>
                <td class="column1 style6 null"></td>
                <td class="column2 style6 null"></td>
                <td class="column3 style6 null"></td>
                <td class="column4 style6 null"></td>
                <td class="column5 style6 null"></td>
                <td class="column6 style6 null"></td>
                <td class="column7 style6 null"></td>
                <td class="column8 style6 null"></td>
                <td class="column9 style6 null"></td>
                <td class="column10 style6 null"></td>
                <td class="column11 style6 null"></td>
                <td class="column12 style6 null"></td>
                <td class="column13 style6 null"></td>
                <td class="column14 style6 null"></td>
                <td class="column15 style6 null"></td>
                <td class="column16 style6 null"></td>
                <td class="column17 style6 null"></td>
                <td class="column18 style6 null"></td>
                <td class="column19 style6 null"></td>
                <td class="column20 style6 null"></td>
                <td class="column21 style6 null"></td>
                <td class="column22 style6 null"></td>
                <td class="column23 style6 null"></td>
                <td class="column24 style6 null"></td>
            </tr>
            <tr class="row13">
                <td class="column0 style1 null"></td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row14">
                <td class="column0 style1 s">Indeks Massa Tubuh</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row15">
                <td class="column0 style1 s">Lebih</td>
                <td class="column1 style7 null"></td>
                <td class="column2 style7 null"></td>
                <td class="column3 style7 null"></td>
                <td class="column4 style7 null"></td>
                <td class="column5 style7 null"></td>
                <td class="column6 style7 null"></td>
                <td class="column7 style7 null"></td>
                <td class="column8 style7 null"></td>
                <td class="column9 style7 null"></td>
                <td class="column10 style7 null"></td>
                <td class="column11 style7 null"></td>
                <td class="column12 style7 null"></td>
                <td class="column13 style7 null"></td>
                <td class="column14 style7 null"></td>
                <td class="column15 style7 null"></td>
                <td class="column16 style7 null"></td>
                <td class="column17 style7 null"></td>
                <td class="column18 style7 null"></td>
                <td class="column19 style7 null"></td>
                <td class="column20 style7 null"></td>
                <td class="column21 style7 null"></td>
                <td class="column22 style7 null"></td>
                <td class="column23 style7 null"></td>
                <td class="column24 style7 null"></td>
            </tr>
            <tr class="row16">
                <td class="column0 style1 s">Normal</td>
                <td class="column1 style8 null"></td>
                <td class="column2 style8 null"></td>
                <td class="column3 style8 null"></td>
                <td class="column4 style8 null"></td>
                <td class="column5 style8 null"></td>
                <td class="column6 style8 null"></td>
                <td class="column7 style8 null"></td>
                <td class="column8 style8 null"></td>
                <td class="column9 style8 null"></td>
                <td class="column10 style8 null"></td>
                <td class="column11 style8 null"></td>
                <td class="column12 style8 null"></td>
                <td class="column13 style8 null"></td>
                <td class="column14 style8 null"></td>
                <td class="column15 style8 null"></td>
                <td class="column16 style8 null"></td>
                <td class="column17 style8 null"></td>
                <td class="column18 style8 null"></td>
                <td class="column19 style8 null"></td>
                <td class="column20 style8 null"></td>
                <td class="column21 style8 null"></td>
                <td class="column22 style8 null"></td>
                <td class="column23 style8 null"></td>
                <td class="column24 style8 null"></td>
            </tr>
            <tr class="row17">
                <td class="column0 style1 s">Kurang</td>
                <td class="column1 style9 null"></td>
                <td class="column2 style9 null"></td>
                <td class="column3 style9 null"></td>
                <td class="column4 style9 null"></td>
                <td class="column5 style9 null"></td>
                <td class="column6 style9 null"></td>
                <td class="column7 style9 null"></td>
                <td class="column8 style9 null"></td>
                <td class="column9 style9 null"></td>
                <td class="column10 style9 null"></td>
                <td class="column11 style9 null"></td>
                <td class="column12 style9 null"></td>
                <td class="column13 style9 null"></td>
                <td class="column14 style9 null"></td>
                <td class="column15 style9 null"></td>
                <td class="column16 style9 null"></td>
                <td class="column17 style9 null"></td>
                <td class="column18 style9 null"></td>
                <td class="column19 style9 null"></td>
                <td class="column20 style9 null"></td>
                <td class="column21 style9 null"></td>
                <td class="column22 style9 null"></td>
                <td class="column23 style9 null"></td>
                <td class="column24 style9 null"></td>
            </tr>
            <tr class="row18">
                <td class="column0 style1 s">Tinggi Badan (Kg)</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row19">
                <td class="column0 style1 s">Berat Badan (cm)</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row20">
                <td class="column0 style1 null"></td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row21">
                <td class="column0 style1 s">Tekanan Darah</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row22">
                <td class="column0 style1 s">Tinggi</td>
                <td class="column1 style10 null"></td>
                <td class="column2 style10 null"></td>
                <td class="column3 style10 null"></td>
                <td class="column4 style10 null"></td>
                <td class="column5 style10 null"></td>
                <td class="column6 style10 null"></td>
                <td class="column7 style10 null"></td>
                <td class="column8 style10 null"></td>
                <td class="column9 style10 null"></td>
                <td class="column10 style10 null"></td>
                <td class="column11 style10 null"></td>
                <td class="column12 style10 null"></td>
                <td class="column13 style10 null"></td>
                <td class="column14 style10 null"></td>
                <td class="column15 style10 null"></td>
                <td class="column16 style10 null"></td>
                <td class="column17 style10 null"></td>
                <td class="column18 style10 null"></td>
                <td class="column19 style10 null"></td>
                <td class="column20 style10 null"></td>
                <td class="column21 style10 null"></td>
                <td class="column22 style10 null"></td>
                <td class="column23 style10 null"></td>
                <td class="column24 style10 null"></td>
            </tr>
            <tr class="row23">
                <td class="column0 style1 s">Normal</td>
                <td class="column1 style11 null"></td>
                <td class="column2 style11 null"></td>
                <td class="column3 style11 null"></td>
                <td class="column4 style11 null"></td>
                <td class="column5 style11 null"></td>
                <td class="column6 style11 null"></td>
                <td class="column7 style11 null"></td>
                <td class="column8 style11 null"></td>
                <td class="column9 style11 null"></td>
                <td class="column10 style11 null"></td>
                <td class="column11 style11 null"></td>
                <td class="column12 style11 null"></td>
                <td class="column13 style11 null"></td>
                <td class="column14 style11 null"></td>
                <td class="column15 style11 null"></td>
                <td class="column16 style11 null"></td>
                <td class="column17 style11 null"></td>
                <td class="column18 style11 null"></td>
                <td class="column19 style11 null"></td>
                <td class="column20 style11 null"></td>
                <td class="column21 style11 null"></td>
                <td class="column22 style11 null"></td>
                <td class="column23 style11 null"></td>
                <td class="column24 style11 null"></td>
            </tr>
            <tr class="row24">
                <td class="column0 style1 s">Rendah</td>
                <td class="column1 style12 null"></td>
                <td class="column2 style12 null"></td>
                <td class="column3 style12 null"></td>
                <td class="column4 style12 null"></td>
                <td class="column5 style12 null"></td>
                <td class="column6 style12 null"></td>
                <td class="column7 style12 null"></td>
                <td class="column8 style12 null"></td>
                <td class="column9 style12 null"></td>
                <td class="column10 style12 null"></td>
                <td class="column11 style12 null"></td>
                <td class="column12 style12 null"></td>
                <td class="column13 style12 null"></td>
                <td class="column14 style12 null"></td>
                <td class="column15 style12 null"></td>
                <td class="column16 style12 null"></td>
                <td class="column17 style12 null"></td>
                <td class="column18 style12 null"></td>
                <td class="column19 style12 null"></td>
                <td class="column20 style12 null"></td>
                <td class="column21 style12 null"></td>
                <td class="column22 style12 null"></td>
                <td class="column23 style12 null"></td>
                <td class="column24 style12 null"></td>
            </tr>
            <tr class="row25">
                <td class="column0 style1 s">Sistole</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row26">
                <td class="column0 style1 s">Diastole</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row27">
                <td class="column0 style1 s">Dgn Obat</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row28">
                <td class="column0 style1 s">Nadi</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row29">
                <td class="column0 style1 null"></td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row30">
                <td class="column0 style1 s">Hemoglobin</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row31">
                <td class="column0 style1 s">Kurang</td>
                <td class="column1 style13 null"></td>
                <td class="column2 style13 null"></td>
                <td class="column3 style13 null"></td>
                <td class="column4 style13 null"></td>
                <td class="column5 style13 null"></td>
                <td class="column6 style13 null"></td>
                <td class="column7 style13 null"></td>
                <td class="column8 style13 null"></td>
                <td class="column9 style13 null"></td>
                <td class="column10 style13 null"></td>
                <td class="column11 style13 null"></td>
                <td class="column12 style13 null"></td>
                <td class="column13 style13 null"></td>
                <td class="column14 style13 null"></td>
                <td class="column15 style13 null"></td>
                <td class="column16 style13 null"></td>
                <td class="column17 style13 null"></td>
                <td class="column18 style13 null"></td>
                <td class="column19 style13 null"></td>
                <td class="column20 style13 null"></td>
                <td class="column21 style13 null"></td>
                <td class="column22 style13 null"></td>
                <td class="column23 style13 null"></td>
                <td class="column24 style13 null"></td>
            </tr>
            <tr class="row32">
                <td class="column0 style1 s">Normal</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row33">
                <td class="column0 style1 s">g% atau %</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row34">
                <td class="column0 style1 null"></td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row35">
                <td class="column0 style1 s">Reduksi Urine</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row36">
                <td class="column0 style1 s">Positif</td>
                <td class="column1 style14 null"></td>
                <td class="column2 style14 null"></td>
                <td class="column3 style14 null"></td>
                <td class="column4 style14 null"></td>
                <td class="column5 style14 null"></td>
                <td class="column6 style14 null"></td>
                <td class="column7 style14 null"></td>
                <td class="column8 style14 null"></td>
                <td class="column9 style14 null"></td>
                <td class="column10 style14 null"></td>
                <td class="column11 style14 null"></td>
                <td class="column12 style14 null"></td>
                <td class="column13 style14 null"></td>
                <td class="column14 style14 null"></td>
                <td class="column15 style14 null"></td>
                <td class="column16 style14 null"></td>
                <td class="column17 style14 null"></td>
                <td class="column18 style14 null"></td>
                <td class="column19 style14 null"></td>
                <td class="column20 style14 null"></td>
                <td class="column21 style14 null"></td>
                <td class="column22 style14 null"></td>
                <td class="column23 style14 null"></td>
                <td class="column24 style14 null"></td>
            </tr>
            <tr class="row37">
                <td class="column0 style1 s">Normal</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row38">
                <td class="column0 style1 s">Jumlah Tanda +</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row39">
                <td class="column0 style1 s">Dgn Obat</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row40">
                <td class="column0 style1 null"></td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row41">
                <td class="column0 style1 s">Protein Urine</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row42">
                <td class="column0 style1 s">Positif</td>
                <td class="column1 style15 null"></td>
                <td class="column2 style15 null"></td>
                <td class="column3 style15 null"></td>
                <td class="column4 style15 null"></td>
                <td class="column5 style15 null"></td>
                <td class="column6 style15 null"></td>
                <td class="column7 style15 null"></td>
                <td class="column8 style15 null"></td>
                <td class="column9 style15 null"></td>
                <td class="column10 style15 null"></td>
                <td class="column11 style15 null"></td>
                <td class="column12 style15 null"></td>
                <td class="column13 style15 null"></td>
                <td class="column14 style15 null"></td>
                <td class="column15 style15 null"></td>
                <td class="column16 style15 null"></td>
                <td class="column17 style15 null"></td>
                <td class="column18 style15 null"></td>
                <td class="column19 style15 null"></td>
                <td class="column20 style15 null"></td>
                <td class="column21 style15 null"></td>
                <td class="column22 style15 null"></td>
                <td class="column23 style15 null"></td>
                <td class="column24 style15 null"></td>
            </tr>
            <tr class="row43">
                <td class="column0 style1 s">Normal</td>
                <td class="column1 style3 null"></td>
                <td class="column2 style3 null"></td>
                <td class="column3 style3 null"></td>
                <td class="column4 style3 null"></td>
                <td class="column5 style3 null"></td>
                <td class="column6 style3 null"></td>
                <td class="column7 style3 null"></td>
                <td class="column8 style3 null"></td>
                <td class="column9 style3 null"></td>
                <td class="column10 style3 null"></td>
                <td class="column11 style3 null"></td>
                <td class="column12 style3 null"></td>
                <td class="column13 style3 null"></td>
                <td class="column14 style3 null"></td>
                <td class="column15 style3 null"></td>
                <td class="column16 style3 null"></td>
                <td class="column17 style3 null"></td>
                <td class="column18 style3 null"></td>
                <td class="column19 style3 null"></td>
                <td class="column20 style3 null"></td>
                <td class="column21 style3 null"></td>
                <td class="column22 style3 null"></td>
                <td class="column23 style3 null"></td>
                <td class="column24 style3 null"></td>
            </tr>
            <tr class="row44">
                <td class="column0 style1 s">Jumlah Tanda +</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            <tr class="row45">
                <td class="column0 style1 s">Dgn Obat</td>
                <td class="column1 style1 null"></td>
                <td class="column2 style1 null"></td>
                <td class="column3 style1 null"></td>
                <td class="column4 style1 null"></td>
                <td class="column5 style1 null"></td>
                <td class="column6 style1 null"></td>
                <td class="column7 style1 null"></td>
                <td class="column8 style1 null"></td>
                <td class="column9 style1 null"></td>
                <td class="column10 style1 null"></td>
                <td class="column11 style1 null"></td>
                <td class="column12 style1 null"></td>
                <td class="column13 style1 null"></td>
                <td class="column14 style1 null"></td>
                <td class="column15 style1 null"></td>
                <td class="column16 style1 null"></td>
                <td class="column17 style1 null"></td>
                <td class="column18 style1 null"></td>
                <td class="column19 style1 null"></td>
                <td class="column20 style1 null"></td>
                <td class="column21 style1 null"></td>
                <td class="column22 style1 null"></td>
                <td class="column23 style1 null"></td>
                <td class="column24 style1 null"></td>
            </tr>
            </tbody>
        </table>
    </body>

    </html>
@endsection
