<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CodeIgniter and VueJS</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <style>
        body {
            font-family: Helvetica Neue, Arial, sans-serif;
            font-size: 14px;
            color: #444;
        }

        table {
            border: 2px solid #42b983;
            border-radius: 3px;
            background-color: #fff;
        }

        th {
            background-color: #42b983;
            color: rgba(255, 255, 255, 0.66);
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        td {
            background-color: #f9f9f9;
        }

        th, td {
            min-width: 120px;
            padding: 10px 20px;
        }

        th.active {
            color: #fff;
        }

        th.active .arrow {
            opacity: 1;
        }

        .arrow {
            display: inline-block;
            vertical-align: middle;
            width: 0;
            height: 0;
            margin-left: 5px;
            opacity: 0.66;
        }

        .arrow.asc {
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-bottom: 4px solid #fff;
        }

        .arrow.dsc {
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 4px solid #fff;
        }

    </style>
</head>
<body>

<div id="container">
    <h1>Welcome to CodeIgniter and Vue!</h1>

    <div id="demo">
        <form id="search">
            Search <input name="query" v-model="searchQuery">
        </form>
        <br>
        <demo-grid
            :data="gridData"
            :columns="gridColumns"
            :filter-key="searchQuery">
        </demo-grid>
    </div>
</div>

</body>
<script src="public/dist/js/grid.js"></script>
</html>
