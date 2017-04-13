<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.bootcss.com/vue/2.2.4/vue.min.js"></script>
    <script src="{{asset('vendor/common/js/vue-grid.js')}}"></script>
    <title>知识库</title>
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
    </style>
</head>
<body>
<!-- component template -->
<script type="text/x-template" id="grid-template">
    <table>
        <thead>
        <tr>
            <th v-for="key in columns"
            @click="sortBy(key)"
            :class="{ active: sortKey == key }">
            {{ key | capitalize }}
            <span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'">
              </span>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="entry in filteredData">
            <td v-for="key in columns">
                {{entry[key]}}
            </td>
        </tr>
        </tbody>
    </table>
</script>

<!-- demo root element -->
<div id="demo">
    <form id="search">
        Search <input name="query" v-model="searchQuery">
    </form>
    <demo-grid
            :data="gridData"
            :columns="gridColumns"
            :filter-key="searchQuery">
    </demo-grid>
</div>
</body>
</html>