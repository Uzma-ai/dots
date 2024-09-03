<!doctype html>
<html lang="en-GB">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dots Adminstration Documentation</title>

            <meta http-equiv="Content-Security-Policy" content="frame-src &#039;self&#039; https://*.draw.io https://*.youtube.com https://*.youtube-nocookie.com https://*.vimeo.com https://embed.diagrams.net; script-src http: https: &#039;nonce-W9b4Naa9wGZe7swCoBSgv23t&#039; &#039;strict-dynamic&#039;; object-src &#039;self&#039;; base-uri &#039;self&#039;">
    
    <style>
            ﻿:root{--font-body: -apple-system, BlinkMacSystemFont, Segoe UI, Oxygen, Ubuntu, Roboto, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;--font-code: Lucida Console, DejaVu Sans Mono, Ubuntu Mono, Monaco, monospace;--color-primary: #206ea7;--color-primary-light: rgba(32,110,167,0.15);--color-link: #206ea7;--color-page: #206ea7;--color-page-draft: #7e50b1;--color-chapter: #af4d0d;--color-book: #077b70;--color-bookshelf: #a94747;--color-positive: #0f7d15;--color-negative: #ab0f0e;--color-info: #0288D1;--color-warning: #cf4d03;--bg-disabled: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='100%25' width='100%25'%3E%3Cdefs%3E%3Cpattern id='doodad' width='19' height='19' viewBox='0 0 40 40' patternUnits='userSpaceOnUse' patternTransform='rotate(143)'%3E%3Crect width='100%25' height='100%25' fill='rgba(42, 67, 101,0)'/%3E%3Cpath d='M-10 30h60v20h-60zM-10-10h60v20h-60' fill='rgba(26, 32, 44,0)'/%3E%3Cpath d='M-10 10h60v20h-60zM-10-30h60v20h-60z' fill='rgba(0, 0, 0,0.05)'/%3E%3C/pattern%3E%3C/defs%3E%3Crect fill='url(%23doodad)' height='200%25' width='200%25'/%3E%3C/svg%3E")}:root.dark-mode{--bg-disabled: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='100%25' width='100%25'%3E%3Cdefs%3E%3Cpattern id='doodad' width='19' height='19' viewBox='0 0 40 40' patternUnits='userSpaceOnUse' patternTransform='rotate(143)'%3E%3Crect width='100%25' height='100%25' fill='rgba(42, 67, 101,0)'/%3E%3Cpath d='M-10 30h60v20h-60zM-10-10h60v20h-60' fill='rgba(26, 32, 44,0)'/%3E%3Cpath d='M-10 10h60v20h-60zM-10-30h60v20h-60z' fill='rgba(255, 255, 255,0.05)'/%3E%3C/pattern%3E%3C/defs%3E%3Crect fill='url(%23doodad)' height='200%25' width='200%25'/%3E%3C/svg%3E");color-scheme:only dark;--color-positive: #4aa850;--color-negative: #e85c5b;--color-warning: #de8a5a}:root:not(.dark-mode){color-scheme:only light}*{box-sizing:border-box;outline-color:var(--color-primary);outline-width:1px}*:focus{outline-style:dotted}html{height:100%;overflow-y:scroll;background-color:#f2f2f2}html.flexbox{overflow-y:hidden}html.dark-mode{background-color:#111}body{font-size:14px;line-height:1.6;color:#444;-webkit-font-smoothing:antialiased;height:100%;display:flex;flex-direction:column}html.dark-mode body{color:#aaa}body,button,input,select,label,textarea{font-family:var(--font-body)}pre,#markdown-editor-input,.text-mono,.code-base,span.code,code{font-family:var(--font-code)}h1{font-size:3.425em;line-height:1.22222222em;margin-top:.48888889em;margin-bottom:.48888889em}h2{font-size:2.8275em;line-height:1.294117647em;margin-top:.8627451em;margin-bottom:.43137255em}h3{font-size:2.333em;line-height:1.221428572em;margin-top:.78571429em;margin-bottom:.43137255em}h4{font-size:1.666em;line-height:1.375em;margin-top:.78571429em;margin-bottom:.43137255em}h1,h2,h3,h4,h5,h6{font-weight:400;position:relative;display:block;font-family:var(--font-heading, var(--font-body));color:#222}html.dark-mode h1,html.dark-mode h2,html.dark-mode h3,html.dark-mode h4,html.dark-mode h5,html.dark-mode h6{color:#bbb}h1 .subheader,h2 .subheader,h3 .subheader,h4 .subheader,h5 .subheader,h6 .subheader{font-size:.5em;line-height:1em;color:#969696}h5{font-size:1.4em}h5,h6{line-height:1.2em;margin-top:.78571429em;margin-bottom:.66em}@media screen and (max-width: 600px){h1{font-size:2.8275em}h2{font-size:2.333em}h3{font-size:1.666em}h4{font-size:1.333em}h5{font-size:1.161616em}}.list-heading{font-size:2rem}h2.list-heading{font-size:1.333rem}a{color:var(--color-link);fill:currentColor;cursor:pointer;text-decoration:none;transition:filter ease-in-out 80ms;line-height:1.6}a:hover{text-decoration:underline}a.icon{display:inline-block}a svg{position:relative;display:inline-block}a:focus img:only-child{outline:2px dashed var(--color-link);outline-offset:2px}a.no-link-style{color:inherit}a.no-link-style:hover{text-decoration:none}.blended-links a{color:inherit}.blended-links a svg{fill:currentColor}p,ul,ol,pre,table,blockquote{margin-top:.3em;margin-bottom:1.375em}hr{border:0;height:1px;background:#eaeaea;margin-bottom:24px}html.dark-mode hr{background:#555}hr.faded{background-image:linear-gradient(to right, #FFF, #e3e0e0 20%, #e3e0e0 80%, #FFF)}hr.darker{background:#ddd}html.dark-mode hr.darker{background:#666}hr.margin-top,hr.even{margin-top:24px}strong,b,.bold,.strong{font-weight:bold}strong>strong,strong>b,strong>.bold,strong>.strong,b>strong,b>b,b>.bold,b>.strong,.bold>strong,.bold>b,.bold>.bold,.bold>.strong,.strong>strong,.strong>b,.strong>.bold,.strong>.strong{font-weight:bolder}em,i,.italic{font-style:italic}small,p.small,span.small,.text-small{font-size:.75rem}sup,.superscript{vertical-align:super;font-size:.8em}sub,.subscript{vertical-align:sub;font-size:.8em}pre{font-size:12px;border:1px solid #ddd;background-color:#fff;border-color:#ddd;border-radius:4px;padding-inline-start:26px;position:relative;padding-top:3px;padding-bottom:3px}html.dark-mode pre{background-color:#2b2b2b}html.dark-mode pre{border-color:#111}pre:before{content:"";display:block;position:absolute;top:0;width:22.4px;inset-inline-start:0;height:100%;background-color:#f5f5f5;border-inline-end:1px solid #ddd}html.dark-mode pre:before{background-color:#313335}html.dark-mode pre:before{border-inline-end:none}@media print{pre{padding-left:12px}pre:before{display:none}}blockquote{display:block;position:relative;border-left:4px solid rgba(0,0,0,0);border-left-color:var(--color-primary);background-color:#f8f8f8;padding:12px 16px 12px 32px;overflow:auto}html.dark-mode blockquote{background-color:#333}blockquote:before{content:"“";font-size:2em;font-weight:bold;position:absolute;top:12px;left:12px;color:#777}.text-mono{font-family:var(--font-code)}.text-uppercase{text-transform:uppercase}.text-capitals{text-transform:capitalize}.code-base,span.code,code{font-size:.84em;border:1px solid #ddd;border-radius:3px;background-color:#f8f8f8;border-color:#ddd}html.dark-mode .code-base,html.dark-mode span.code,html.dark-mode code{background-color:#2b2b2b}html.dark-mode .code-base,html.dark-mode span.code,html.dark-mode code{border-color:#444}code{display:inline;padding:1px 3px;white-space:pre-wrap;line-height:1.2em}span.code{padding:1px 6px}pre code{background-color:rgba(0,0,0,0);border:0;font-size:1em;display:block;line-height:1.6}span.highlight{font-weight:bold;padding:2px 4px}ul,ol{padding-left:32px;padding-right:32px;display:flow-root}ul p,ol p{margin:0}ul{list-style:disc}ul ul{list-style:circle}ul label{margin:0}ol{list-style:decimal}li>ol,li>ul{margin-top:0;margin-bottom:0;margin-block-end:0;margin-block-start:0;padding-block-end:0;padding-block-start:0;padding-left:19.2px;padding-right:19.2px}li.checkbox-item,li.task-list-item{display:list-item;list-style:none;margin-left:-19.2px}li.checkbox-item input[type=checkbox],li.task-list-item input[type=checkbox]{margin-right:6px}li.checkbox-item li.checkbox-item,li.checkbox-item li.task-list-item,li.task-list-item li.checkbox-item,li.task-list-item li.task-list-item{margin-left:6px}.underlined{text-decoration:underline}.text-center{text-align:center}.text-left{text-align:start}.text-right{text-align:end}@media screen and (min-width: 360px){.text-xxs-center{text-align:center}.text-xxs-left{text-align:start}.text-xxs-right{text-align:end}}@media screen and (min-width: 400px){.text-xs-center{text-align:center}.text-xs-left{text-align:start}.text-xs-right{text-align:end}}@media screen and (min-width: 600px){.text-s-center{text-align:center}.text-s-left{text-align:start}.text-s-right{text-align:end}}@media screen and (min-width: 880px){.text-m-center{text-align:center}.text-m-left{text-align:start}.text-m-right{text-align:end}}@media screen and (min-width: 1000px){.text-l-center{text-align:center}.text-l-left{text-align:start}.text-l-right{text-align:end}}@media screen and (min-width: 1100px){.text-xl-center{text-align:center}.text-xl-left{text-align:start}.text-xl-right{text-align:end}}.text-bigger{font-size:1.1em}.text-large{font-size:1.6666em}.no-color{color:inherit}.break-text{white-space:normal;word-wrap:break-word;overflow-wrap:break-word}.text-limit-lines-1{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.text-limit-lines-2{display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;overflow:hidden}.header-group{margin:16px 0}.header-group h1,.header-group h2,.header-group h3,.header-group h4,.header-group h5,.header-group h6{margin:0}span.sep{color:#bbb;padding:0 6px}.list>*{display:block}.svg-icon{width:1em;height:1em;display:inline-block;position:relative;bottom:-0.105em;margin-inline-end:6px;pointer-events:none;fill:currentColor}table{min-width:100px;max-width:100%}table thead{background-color:#f8f8f8;font-weight:500}html.dark-mode table thead{background-color:#333}table td,table th{min-width:10px;padding:6px 8px;border:1px solid #ddd;overflow:auto;line-height:1.2;word-break:break-word;vertical-align:top}table td p,table th p{margin:0}table.table{width:100%}table.table tr td,table.table tr th{border-bottom:1px solid rgba(0,0,0,.05)}table.table th,table.table td{text-align:start;border:none;padding:12px 12px;vertical-align:middle;margin:0;overflow:visible}table.table th{font-weight:bold}table.table tr:hover{background-color:#f2f2f2}html.dark-mode table.table tr:hover{background-color:#333}table.table .text-right{text-align:end}table.table .text-center{text-align:center}table.table td.actions{overflow:visible}table.table a{display:inline-block}table.table.expand-to-padding{margin-left:-12px;margin-right:-12px;width:calc(100% + 2*12px);max-width:calc(100% + 2*12px)}table.no-style td{border:0;padding:0}table.list-table{margin:0 -6px}table.list-table td{border:0;vertical-align:middle;padding:6px}.page-content{width:100%;max-width:840px;margin:0 auto;overflow-wrap:break-word}.page-content .align-left{text-align:left}.page-content img.align-left,.page-content table.align-left,.page-content iframe.align-left,.page-content video.align-left{float:left !important;margin:6px 16px 16px 0}.page-content .align-right{text-align:right !important}.page-content img.align-right,.page-content table.align-right,.page-content iframe.align-right,.page-content video.align-right{float:right !important;margin:6px 0 6px 12px}.page-content .align-center{text-align:center}.page-content img.align-center,.page-content video.align-center,.page-content iframe.align-center{display:block}.page-content img.align-center,.page-content table.align-center,.page-content iframe.align-center,.page-content video.align-center{margin-left:auto;margin-right:auto}.page-content h1,.page-content h2,.page-content h3,.page-content h4,.page-content h5,.page-content h6,.page-content pre{clear:left}.page-content hr{clear:both;margin:16px 0}.page-content table{hyphens:auto;table-layout:fixed;max-width:100%;height:auto !important}.page-content ins,.page-content del{text-decoration:none}.page-content ins{background:#dbffdb}.page-content del{background:#ffecec}.page-content details{border:1px solid;border-color:#ddd;margin-bottom:1em;padding:12px}html.dark-mode .page-content details{border-color:#555}.page-content details>summary{margin-top:-12px;margin-left:-12px;margin-right:-12px;margin-bottom:-12px;font-weight:bold;background-color:#eee;padding:6px 12px}html.dark-mode .page-content details>summary{background-color:#333}.page-content details[open]>summary{margin-bottom:12px;border-bottom:1px solid;border-color:#ddd}html.dark-mode .page-content details[open]>summary{border-color:#555}.page-content details>summary+*{margin-top:.2em}.page-content details:after{content:"";display:block;clear:both}.page-content li>input[type=checkbox]{vertical-align:top;margin-top:.3em}.page-content p:empty{min-height:1.6em}.page-content.page-revision pre code{white-space:pre-wrap}.page-content .cm-editor{margin-bottom:1.375em}.page-content video{max-width:100%}.page-content a{text-decoration:underline}body .page-content img,.page-content img:not([data-mce-object]){max-width:100%;height:auto}.callout{border-left:3px solid #bbb;border-inline-start:3px solid #bbb;border-inline-end:none;background-color:#eee;padding:12px;padding-left:32px;padding-inline-start:32px;padding-inline-end:12px;display:block;position:relative;overflow:auto}.callout:before{background-image:url("data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIGZpbGw9IiMwMTUzODAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+ICAgIDxwYXRoIGQ9Ik0wIDBoMjR2MjRIMHoiIGZpbGw9Im5vbmUiLz4gICAgPHBhdGggZD0iTTEyIDJDNi40OCAyIDIgNi40OCAyIDEyczQuNDggMTAgMTAgMTAgMTAtNC40OCAxMC0xMFMxNy41MiAyIDEyIDJ6bTEgMTVoLTJ2LTZoMnY2em0wLThoLTJWN2gydjJ6Ii8+PC9zdmc+");background-repeat:no-repeat;content:"";width:1.2em;height:1.2em;left:8px;inset-inline-start:8px;inset-inline-end:unset;top:50%;margin-top:-9px;display:inline-block;position:absolute;line-height:1;opacity:.8}.callout.success{border-color:#0f7d15;background-color:#eafdeb;color:#063409}html.dark-mode .callout.success{border-color:#4aa850}html.dark-mode .callout.success{background-color:#122913}html.dark-mode .callout.success{color:#4aa850}.callout.success:before{background-image:url("data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIGZpbGw9IiMzNzZjMzkiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+ICAgIDxwYXRoIGQ9Ik0wIDBoMjR2MjRIMHoiIGZpbGw9Im5vbmUiLz4gICAgPHBhdGggZD0iTTEyIDJDNi40OCAyIDIgNi40OCAyIDEyczQuNDggMTAgMTAgMTAgMTAtNC40OCAxMC0xMFMxNy41MiAyIDEyIDJ6bS0yIDE1bC01LTUgMS40MS0xLjQxTDEwIDE0LjE3bDcuNTktNy41OUwxOSA4bC05IDl6Ii8+PC9zdmc+")}.callout.danger{border-color:#ab0f0e;background-color:#fcdbdb;color:#4d0706}html.dark-mode .callout.danger{border-color:#e85c5b}html.dark-mode .callout.danger{background-color:#250505}html.dark-mode .callout.danger{color:#e85c5b}.callout.danger:before{background-image:url("data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIGZpbGw9IiNiOTE4MTgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+ICAgIDxwYXRoIGQ9Ik0xNS43MyAzSDguMjdMMyA4LjI3djcuNDZMOC4yNyAyMWg3LjQ2TDIxIDE1LjczVjguMjdMMTUuNzMgM3pNMTIgMTcuM2MtLjcyIDAtMS4zLS41OC0xLjMtMS4zIDAtLjcyLjU4LTEuMyAxLjMtMS4zLjcyIDAgMS4zLjU4IDEuMyAxLjMgMCAuNzItLjU4IDEuMy0xLjMgMS4zem0xLTQuM2gtMlY3aDJ2NnoiLz4gICAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg==")}.callout.info{border-color:#0288d1;color:#01466c;background-color:#d3efff}html.dark-mode .callout.info{border-color:#0288d1}html.dark-mode .callout.info{color:#0288d1}html.dark-mode .callout.info{background-color:#001825}.callout.warning{border-color:#cf4d03;background-color:#fee3d3;color:#6a2802}html.dark-mode .callout.warning{border-color:#de8a5a}html.dark-mode .callout.warning{background-color:#30170a}html.dark-mode .callout.warning{color:#de8a5a}.callout.warning:before{background-image:url("data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIGZpbGw9IiNiNjUzMWMiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+ICAgIDxwYXRoIGQ9Ik0wIDBoMjR2MjRIMHoiIGZpbGw9Im5vbmUiLz4gICAgPHBhdGggZD0iTTEgMjFoMjJMMTIgMiAxIDIxem0xMi0zaC0ydi0yaDJ2MnptMC00aC0ydi00aDJ2NHoiLz48L3N2Zz4=")}.callout a{color:inherit;text-decoration:underline}html,body{background-color:#fff}body{font-family:"DejaVu Sans",-apple-system,BlinkMacSystemFont,"Segoe UI","Oxygen","Ubuntu","Roboto","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;margin:0;padding:0;display:block}table{border-spacing:0;border-collapse:collapse}.page-content{overflow:hidden}pre{padding-left:12px}pre:before{display:none}pre code{white-space:pre-wrap}.page-break{page-break-after:always}@media screen{.page-break{border-top:1px solid #ddd}}ul.contents ul li{list-style:circle}.chapter-hint{color:#888;margin-top:32px}.chapter-hint+h1{margin-top:0}body.export-format-pdf{font-size:14px;line-height:1.2}body.export-format-pdf h1,body.export-format-pdf h2,body.export-format-pdf h3,body.export-format-pdf h4,body.export-format-pdf h5,body.export-format-pdf h6{line-height:1.2}body.export-format-pdf table{max-width:800px !important;font-size:.8em;width:100% !important}body.export-format-pdf table td{width:auto !important}body.export-format-pdf .page-content .float{float:none !important}body.export-format-pdf .page-content img.align-left,body.export-format-pdf .page-content img.align-right{float:none !important;clear:both;display:block}body.export-format-pdf.export-engine-dompdf .page-content a>img{max-width:700px}body.export-format-pdf.export-engine-dompdf .page-content td a>img{max-width:100%}/*# sourceMappingURL=export-styles.css.map */

    </style>


    </head>
<body class="export export-format-html export-engine-none">
<div class="page-content" dir="auto">
    
    <h1 style="font-size: 4.8em">Dots Adminstration Documentation</h1>
    <div><p></p></div>

    <ul class="contents">
                    <li><a href="#chapter-8">Introduction</a></li>
                            <ul class="contents">
                            <li><a href="#page-12">A. Overview of the Software</a></li>
                            <li><a href="#page-13">B. Purpose and Scope</a></li>
                            <li><a href="#page-14">C. Audience for the Document</a></li>
                    </ul>
                                <li><a href="#chapter-9">1. System Management</a></li>
                            <ul class="contents">
                            <li><a href="#page-15">1. System Management</a></li>
                            <li><a href="#page-16">1.1 Overview</a></li>
                            <li><a href="#page-17">1.2 Basic settings</a></li>
                    </ul>
                        </ul>

                        <div class="page-break"></div>
<h1 id="chapter-8">Introduction</h1>

<div><p></p></div>

            <div class="page-break"></div>

    <div class="chapter-hint">Introduction</div>

<h1 id="page-12">A. Overview of the Software</h1>
<p id="bkmrk-the-software-applica"><span data-slate-fragment="JTdCJTIyb2JqZWN0JTIyJTNBJTIyZG9jdW1lbnQlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMlRoZSUyMHNvZnR3YXJlJTIwYXBwbGljYXRpb24lMkMlMjBmb3JtZXJseSUyMGtub3duJTIwYXMlMjBEb3RzJTJDJTIwaXMlMjBhJTIwaGlnaGx5JTIwYWNjbGFpbWVkJTIwd2ViJTIwZG9jdW1lbnQlMjBtYW5hZ2VtZW50JTIwc3lzdGVtJTIwZGVzaWduZWQlMjB0byUyMHN0cmVhbWxpbmUlMjBpbnRlcm5hbCUyMGRvY3VtZW50JTIwbWFuYWdlbWVudCUyMGFuZCUyMHNoYXJpbmcuJTIwVGhpcyUyMHZlcnNhdGlsZSUyMHdlYiUyMGFwcGxpY2F0aW9uJTIwbm90JTIwb25seSUyMGZhY2lsaXRhdGVzJTIwZWZmaWNpZW50JTIwZG9jdW1lbnQlMjBoYW5kbGluZyUyMGJ1dCUyMGFsc28lMjBzdXBwb3J0cyUyMHdlYnNpdGUlMjBtYW5hZ2VtZW50JTIwZGlyZWN0bHklMjBvbiUyMHRoZSUyMHNlcnZlci4lMjBVc2VycyUyMGNhbiUyMHJlcGxhY2UlMjB0cmFkaXRpb25hbCUyMEZUUCUyMG1ldGhvZHMlMjB3aXRoJTIwYSUyMG1vcmUlMjBpbnRlZ3JhdGVkJTIwYXBwcm9hY2glMkMlMjBsZXZlcmFnaW5nJTIwdGhlJTIwYXBwbGljYXRpb24ncyUyMHdlYiUyMElERSUyMGZvciUyMG9ubGluZSUyMGRldmVsb3BtZW50LiUyMEFkZGl0aW9uYWxseSUyQyUyMHRoZSUyMHNvZnR3YXJlJTIwb2ZmZXJzJTIwdGhlJTIwZmxleGliaWxpdHklMjB0byUyMGludGVncmF0ZSUyMHNlY29uZGFyeSUyMGRldmVsb3BtZW50JTIwaW50byUyMGV4aXN0aW5nJTIwc3lzdGVtcyUyQyUyMGVuaGFuY2luZyUyMGl0cyUyMGFkYXB0YWJpbGl0eSUyMGFuZCUyMGZ1bmN0aW9uYWxpdHkuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI4WTJFdGxRbTFvcGglMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJxRElqZ0Yxa3gzRTklMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI4azlpZkp1MTJydTglMjIlN0Q=">The software application, formerly known as Dots, is a highly acclaimed web document management system designed to streamline internal document management and sharing. This versatile web application not only facilitates efficient document handling but also supports website management directly on the server. Users can replace traditional FTP methods with a more integrated approach, leveraging the application's web IDE for online development. Additionally, the software offers the flexibility to integrate secondary development into existing systems, enhancing its adaptability and functionality.</span></p>            <div class="page-break"></div>

    <div class="chapter-hint">Introduction</div>

<h1 id="page-13">B. Purpose and Scope</h1>
<div data-virtualparent="true" id="bkmrk-the-primary-purpose-">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="j4YBYwKL3YuO">
<div class="css-175oi2r">
<div data-key="j4YBYwKL3YuO" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="j4YBYwKL3YuO" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="r7bkn1INsX3x"><span data-offset-key="r7bkn1INsX3x:0">The primary purpose of this software is to provide a comprehensive solution for managing documents and websites in a web-based environment. It aims to simplify document sharing and website management while offering advanced features for online development. The scope of the application includes:</span></span></span></div>
<div data-block-content="j4YBYwKL3YuO" class="relative flex-1"></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" data-slate-fragment="JTdCJTIyb2JqZWN0JTIyJTNBJTIyZG9jdW1lbnQlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMlRoZSUyMHByaW1hcnklMjBwdXJwb3NlJTIwb2YlMjB0aGlzJTIwc29mdHdhcmUlMjBpcyUyMHRvJTIwcHJvdmlkZSUyMGElMjBjb21wcmVoZW5zaXZlJTIwc29sdXRpb24lMjBmb3IlMjBtYW5hZ2luZyUyMGRvY3VtZW50cyUyMGFuZCUyMHdlYnNpdGVzJTIwaW4lMjBhJTIwd2ViLWJhc2VkJTIwZW52aXJvbm1lbnQuJTIwSXQlMjBhaW1zJTIwdG8lMjBzaW1wbGlmeSUyMGRvY3VtZW50JTIwc2hhcmluZyUyMGFuZCUyMHdlYnNpdGUlMjBtYW5hZ2VtZW50JTIwd2hpbGUlMjBvZmZlcmluZyUyMGFkdmFuY2VkJTIwZmVhdHVyZXMlMjBmb3IlMjBvbmxpbmUlMjBkZXZlbG9wbWVudC4lMjBUaGUlMjBzY29wZSUyMG9mJTIwdGhlJTIwYXBwbGljYXRpb24lMjBpbmNsdWRlcyUzQSUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyMVBudmR6OW12R2VpJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyYUhkaHVJdGFjUTlxJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC11bm9yZGVyZWQlMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJJbnRlcm5hbCUyMGRvY3VtZW50JTIwbWFuYWdlbWVudCUyMGFuZCUyMHNoYXJpbmcuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJsZVNCWWxBc2l0VDUlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJKdWdjdUs1ZE51cUolMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJOVkllZzNPeVlIUWElMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyV2Vic2l0ZSUyMG1hbmFnZW1lbnQlMjBvbiUyMHRoZSUyMHNlcnZlci4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMjAyQ3k2WGNyWVlFSSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMndMUVdsUkNkT2l2aCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMllnVExaeE9abGRCSSUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJPbmxpbmUlMjBkZXZlbG9wbWVudCUyMHRocm91Z2glMjBhbiUyMGludGVncmF0ZWQlMjB3ZWIlMjBJREUuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJrSWFxd28yaEJrVFolMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJQS254VllZRGNwWkIlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJGMHM2bVRIRTdJZWIlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIySW50ZWdyYXRpb24lMjBjYXBhYmlsaXRpZXMlMjBmb3IlMjBzZWNvbmRhcnklMjBkZXZlbG9wbWVudCUyMHdpdGhpbiUyMGV4aXN0aW5nJTIwc3lzdGVtcy4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkRLV2Z6Tkg0NDBpUyUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnJ5ajFPc2E1dGxMZyUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkxTdVNjRE5EajBjYyUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlFyU3pUbVR4NG9qNSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlZBN0tOVk1LVmo2UCUyMiU3RA==" id="bkmrk-internal-document-ma">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="QrSzTmTx4oj5">
<div class="css-175oi2r">
<div data-key="QrSzTmTx4oj5" class="relative flex py-4 pt-4 pb-4 _dropHorizontal_2u9k6_23">
<div data-block-content="QrSzTmTx4oj5" class="relative flex-1">
<div class="relative w-full" node="NVIeg3OyYHQa">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="NVIeg3OyYHQa">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="JugcuK5dNuqJ">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="leSBYlAsitT5"><span data-offset-key="leSBYlAsitT5:0">Internal document management and sharing.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="YgTLZxOZldBI">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="YgTLZxOZldBI">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="wLQWlRCdOivh">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="02Cy6XcrYYEI"><span data-offset-key="02Cy6XcrYYEI:0">Website management on the server.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="F0s6mTHE7Ieb">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="F0s6mTHE7Ieb">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="PKnxVYYDcpZB">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="kIaqwo2hBkTZ"><span data-offset-key="kIaqwo2hBkTZ:0">Online development through an integrated web IDE.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="LSuScDNDj0cc">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="LSuScDNDj0cc">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="ryj1Osa5tlLg">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="DKWfzNH440iS"><span data-offset-key="DKWfzNH440iS:0">Integration capabilities for secondary development within existing systems.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>            <div class="page-break"></div>

    <div class="chapter-hint">Introduction</div>

<h1 id="page-14">C. Audience for the Document</h1>
<div data-virtualparent="true" id="bkmrk-this-document-is-int">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="oxj8Dugxdqpc">
<div class="css-175oi2r">
<div data-key="oxj8Dugxdqpc" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="oxj8Dugxdqpc" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="vHpouKg3Bn9A"><span data-offset-key="vHpouKg3Bn9A:0">This document is intended for:</span></span></span></div>
<div data-block-content="oxj8Dugxdqpc" class="relative flex-1"></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" data-slate-fragment="JTdCJTIyb2JqZWN0JTIyJTNBJTIyZG9jdW1lbnQlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMlRoaXMlMjBkb2N1bWVudCUyMGlzJTIwaW50ZW5kZWQlMjBmb3IlM0ElMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnNsUlJkZmV3VU81ZSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnhMcmh0VnVYUG5hNiUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtdW5vcmRlcmVkJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyRW5kJTIwVXNlcnMlM0ElMjBJbmRpdmlkdWFscyUyMHdobyUyMHdpbGwlMjB1dGlsaXplJTIwdGhlJTIwc29mdHdhcmUlMjBmb3IlMjBkb2N1bWVudCUyMG1hbmFnZW1lbnQlMkMlMjBzaGFyaW5nJTJDJTIwYW5kJTIwd2Vic2l0ZSUyMG1hbmFnZW1lbnQuJTIwSXQlMjBwcm92aWRlcyUyMGd1aWRhbmNlJTIwb24lMjBob3clMjB0byUyMGVmZmVjdGl2ZWx5JTIwdXNlJTIwdGhlJTIwYXBwbGljYXRpb24ncyUyMGZlYXR1cmVzLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyeHZVdDd5SGtiSTZFJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyWEpYNk5VSWlQVmo1JTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIybzlJRFhHVlpoeTdDJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkFkbWluaXN0cmF0b3JzJTNBJTIwVXNlcnMlMjByZXNwb25zaWJsZSUyMGZvciUyMGluc3RhbGxpbmclMkMlMjBjb25maWd1cmluZyUyQyUyMGFuZCUyMG1haW50YWluaW5nJTIwdGhlJTIwc29mdHdhcmUuJTIwSXQlMjBpbmNsdWRlcyUyMGRldGFpbGVkJTIwaW5zdHJ1Y3Rpb25zJTIwb24lMjBzZXR1cCUyQyUyMGNvbmZpZ3VyYXRpb24lMkMlMjBhbmQlMjBvbmdvaW5nJTIwbWFpbnRlbmFuY2UuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJabFFLZWhFaGpra1glMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ6UHkzZ1FmSEFCMVQlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJINURwU3E3MDg3Ym4lMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyRGV2ZWxvcGVycyUzQSUyMFRlY2huaWNhbCUyMHBlcnNvbm5lbCUyMHdobyUyMG1heSUyMGV4dGVuZCUyMG9yJTIwY3VzdG9taXplJTIwdGhlJTIwYXBwbGljYXRpb24uJTIwSXQlMjBvZmZlcnMlMjBpbnNpZ2h0cyUyMGludG8lMjB0aGUlMjBzb2Z0d2FyZSdzJTIwYXJjaGl0ZWN0dXJlJTJDJTIwQVBJJTJDJTIwYW5kJTIwaW50ZWdyYXRpb24lMjBvcHRpb25zLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyMGFlckFvWUpSTEFQJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyR1oyaEhJUk55WUVyJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyTHNuaU5nWElEbDg5JTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMlN1cHBvcnQlMjBUZWFtcyUzQSUyMEluZGl2aWR1YWxzJTIwcHJvdmlkaW5nJTIwYXNzaXN0YW5jZSUyMHRvJTIwdXNlcnMlMjBhbmQlMjBhZG1pbmlzdHJhdG9ycy4lMjBUaGUlMjBkb2N1bWVudCUyMGluY2x1ZGVzJTIwdHJvdWJsZXNob290aW5nJTIwaW5mb3JtYXRpb24lMjBhbmQlMjBjb21tb24lMjBGQVFzJTIwdG8lMjBhaWQlMjBpbiUyMHJlc29sdmluZyUyMGlzc3Vlcy4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMk1uMlVWTThRdWVYVCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnc1UWRWM29QUm9JNSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmdwWGRXdlVzSDVQdCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMklsZGVxUUlQdnkySyUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmxjb1pSQVA5emZQeSUyMiU3RA==" id="bkmrk-end-users%3A-individua">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="IldeqQIPvy2K">
<div class="css-175oi2r">
<div data-key="IldeqQIPvy2K" class="relative flex py-4 pt-4 pb-4 _dropHorizontal_2u9k6_23">
<div data-block-content="IldeqQIPvy2K" class="relative flex-1">
<div class="relative w-full" node="o9IDXGVZhy7C">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="o9IDXGVZhy7C">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="XJX6NUIiPVj5">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="xvUt7yHkbI6E"><span data-offset-key="xvUt7yHkbI6E:0">End Users: Individuals who will utilize the software for document management, sharing, and website management. It provides guidance on how to effectively use the application's features.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="H5DpSq7087bn">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="H5DpSq7087bn">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="zPy3gQfHAB1T">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="ZlQKehEhjkkX"><span data-offset-key="ZlQKehEhjkkX:0">Administrators: Users responsible for installing, configuring, and maintaining the software. It includes detailed instructions on setup, configuration, and ongoing maintenance.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="LsniNgXIDl89">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="LsniNgXIDl89">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="GZ2hHIRNyYEr">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="0aerAoYJRLAP"><span data-offset-key="0aerAoYJRLAP:0">Developers: Technical personnel who may extend or customize the application. It offers insights into the software's architecture, API, and integration options.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="gpXdWvUsH5Pt">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="gpXdWvUsH5Pt">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="w5QdV3oPRoI5">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="Mn2UVM8QueXT"><span data-offset-key="Mn2UVM8QueXT:0">Support Teams: Individuals providing assistance to users and administrators. The document includes troubleshooting information and common FAQs to aid in resolving issues.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>                                    <div class="page-break"></div>
<h1 id="chapter-9">1. System Management</h1>

<div><p></p></div>

            <div class="page-break"></div>

    <div class="chapter-hint">1. System Management</div>

<h1 id="page-15">1. System Management</h1>
<h4 id="bkmrk-a.-system-requiremen" class="relative flex items-center group/block-anchor"><span id="bkmrk-a.-system-requiremen-1" class="min-w-px select-text text-left text-content-paragraph md:text-content-heading-small"><span data-key="mwr3ZkKQtROT"><span data-offset-key="mwr3ZkKQtROT:0">A. System Requirements</span></span></span><span class="ml-[0.5em] flex"><a class="inline-flex shrink-0 cursor-pointer items-center text-[0.75em] text-muted hover:text-primary group-hover/block-anchor:opacity-100 group-focus/block-anchor:opacity-100 opacity-100" href="#bkmrk-a.-system-requiremen" aria-label="Direct link to heading"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 16 16" preserveaspectratio="xMidYMid meet" width="1em" height="1em"><path fill="currentColor" fill-rule="evenodd" d="M7.42 1.925a.6.6 0 0 1 .405.745L7.167 4.9h3.998l.76-2.57a.6.6 0 1 1 1.15.34l-.659 2.23H14a.6.6 0 0 1 0 1.2h-1.938l-1.123 3.8H13a.6.6 0 0 1 0 1.2h-2.415l-.76 2.57a.6.6 0 0 1-1.15-.34l.658-2.23H5.335l-.76 2.57a.6.6 0 1 1-1.15-.34l.658-2.23H2a.6.6 0 1 1 0-1.2h2.438l1.123-3.8H3a.6.6 0 0 1 0-1.2h2.915l.76-2.57a.6.6 0 0 1 .745-.405ZM6.812 6.1 5.689 9.9h3.999l1.123-3.8H6.812Z" clip-rule="evenodd"></path></svg></a></span></h4>
<div data-virtualparent="true" id="bkmrk-hardware-requirement">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="LrTvnjSmLAVX">
<div class="css-175oi2r">
<div data-key="LrTvnjSmLAVX" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="LrTvnjSmLAVX" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="DSRamj5EwIpc"><strong class="r-crgep1 r-b88u0q" data-slate-leaf="true" data-offset-key="DSRamj5EwIpc:0">Hardware Requirements:</strong></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-processor%3A-minimum-2">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="hF0X8VnibbkM">
<div class="css-175oi2r">
<div data-key="hF0X8VnibbkM" class="relative flex py-4 pt-4 pb-4 _dropHorizontal_2u9k6_23">
<div data-block-content="hF0X8VnibbkM" class="relative flex-1">
<div class="relative w-full" node="J0U8QIbhEIk4">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="J0U8QIbhEIk4">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="qjVQYZYz3slJ">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="Pvp7S0VX3DOo"><span data-offset-key="Pvp7S0VX3DOo:0">Processor: Minimum 2 GHz dual-core processor (recommended: 4 GHz quad-core or higher).</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="88PP8udYbmec">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="88PP8udYbmec">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="1XFEoyzKEO7g">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="7qq6jTmYkFIZ"><span data-offset-key="7qq6jTmYkFIZ:0">RAM: Minimum 4 GB (recommended: 8 GB or more).</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="0zbBcZMUUjVz">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="0zbBcZMUUjVz">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="9mZbzhUoQLFl">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="hzI3772C0uzU"><span data-offset-key="hzI3772C0uzU:0">Storage: Minimum 10 GB of available disk space for installation (recommended: SSD with additional space for data storage).</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="BVNb3ZjuoLbz">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="BVNb3ZjuoLbz">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="T6TFQkgrPPJc">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="wUPkcXSKuN7f"><span data-offset-key="wUPkcXSKuN7f:0">Network: Stable internet connection (recommended: broadband).</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-software-requirement">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="kxsaXC8BAh1s">
<div class="css-175oi2r">
<div data-key="kxsaXC8BAh1s" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="kxsaXC8BAh1s" class="relative flex-1"><br></div>
<div data-block-content="kxsaXC8BAh1s" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="OcMKzWNIg06A"><span class="r-crgep1 r-b88u0q">Software Requirements:</span></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-operating-system%3A-wi">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="23MB5dlRXQt1">
<div class="css-175oi2r">
<div data-key="23MB5dlRXQt1" class="relative flex py-4 pt-4 pb-4 _dropHorizontal_2u9k6_23">
<div data-block-content="23MB5dlRXQt1" class="relative flex-1">
<div class="relative w-full" node="MZ9o9G0IT8yP">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="MZ9o9G0IT8yP">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="f1rVnuCmib4N">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="uYNhyTs7BLvp"><span data-offset-key="uYNhyTs7BLvp:0">Operating System:</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="OS6HeFUBJF7R">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="OS6HeFUBJF7R">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="c0RXexLf9gxp">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="XMxdfiwlgsSp"><span data-offset-key="XMxdfiwlgsSp:0">Windows 10 or later</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="1VWD8hzUbV2f">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="1VWD8hzUbV2f">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="aP5Fav14oHJ6">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="ksWRYKkkCeBm"><span data-offset-key="ksWRYKkkCeBm:0">macOS 10.14 (Mojave) or later</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="PDgdtPM7bErd">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="PDgdtPM7bErd">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="Y0y0IxoUWMrm">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="eN3ydjZPtI5g"><span data-offset-key="eN3ydjZPtI5g:0">Linux (Ubuntu 18.04 or later, CentOS 7 or later)</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="Ox4H2DtAndEv">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="Ox4H2DtAndEv">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="pNoSo8fgJvP5">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="b7koE3hNKKnk"><span data-offset-key="b7koE3hNKKnk:0">Web Browser: Latest versions of Google Chrome, Mozilla Firefox, Safari, or Microsoft Edge.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="gKG3dNaUUKZL">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="gKG3dNaUUKZL">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="Pul1J9PCg9tq">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="yhmuX20I6SJw"><span data-offset-key="yhmuX20I6SJw:0">Web Server: Apache 2.4 or later, Nginx 1.14 or later.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="w0B8f9VD9X0P">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="w0B8f9VD9X0P">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="MqMyRS6122d7">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="kWllDxEbc5EE"><span data-offset-key="kWllDxEbc5EE:0">Database: MySQL 5.7 or later, PostgreSQL 9.6 or later.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="uYXofSpkuSP1">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="uYXofSpkuSP1">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="Y4D9Na26mHgq">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="QtIHfOBnpfd9"><span data-offset-key="QtIHfOBnpfd9:0">PHP: Version 7.4 or later.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="cd5kF5pipE9M">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="cd5kF5pipE9M">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="et5Op3RZ2YnF">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="NxWYAHwobYo9"><span data-offset-key="NxWYAHwobYo9:0">JavaScript Runtime: Node.js 14.x or later (for webIDE features).</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<h4 class="relative flex items-center group/block-anchor" id="bkmrk-%C2%A0"> </h4>
<h4 id="bkmrk-b.-installation-inst" class="relative flex items-center group/block-anchor"><span id="bkmrk-b.-installation-inst-1" class="min-w-px select-text text-left text-content-paragraph md:text-content-heading-small"><span data-key="RaKXKzO9dZOY"><span data-offset-key="RaKXKzO9dZOY:0">B. Installation Instructions</span></span></span><span class="ml-[0.5em] flex"><a class="inline-flex shrink-0 cursor-pointer items-center text-[0.75em] text-muted hover:text-primary group-hover/block-anchor:opacity-100 group-focus/block-anchor:opacity-100 opacity-0" href="#bkmrk-b.-installation-inst" aria-label="Direct link to heading"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 16 16" preserveaspectratio="xMidYMid meet" width="1em" height="1em"><path fill="currentColor" fill-rule="evenodd" d="M7.42 1.925a.6.6 0 0 1 .405.745L7.167 4.9h3.998l.76-2.57a.6.6 0 1 1 1.15.34l-.659 2.23H14a.6.6 0 0 1 0 1.2h-1.938l-1.123 3.8H13a.6.6 0 0 1 0 1.2h-2.415l-.76 2.57a.6.6 0 0 1-1.15-.34l.658-2.23H5.335l-.76 2.57a.6.6 0 1 1-1.15-.34l.658-2.23H2a.6.6 0 1 1 0-1.2h2.438l1.123-3.8H3a.6.6 0 0 1 0-1.2h2.915l.76-2.57a.6.6 0 0 1 .745-.405ZM6.812 6.1 5.689 9.9h3.999l1.123-3.8H6.812Z" clip-rule="evenodd"></path></svg></a></span></h4>
<div data-virtualparent="true" id="bkmrk-download-the-softwar">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="4Qlo84TlxwgL">
<div class="css-175oi2r">
<div data-key="4Qlo84TlxwgL" class="relative flex py-4 pt-4 pb-4 _dropHorizontal_2u9k6_23">
<div data-block-content="4Qlo84TlxwgL" class="relative flex-1">
<div class="relative w-full" node="qKO2IkTJGsNF">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="qKO2IkTJGsNF">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="aLWHZzPCd2Q5">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="OdlJmgEtksEU"><span data-offset-key="OdlJmgEtksEU:0">Download the Software:</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="FHu0S5TmHIcJ">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="FHu0S5TmHIcJ">
<div class="css-175oi2r r-13awgt0">
<div class="relative w-full" node="UzAX7r2LekvM">
<div class="css-175oi2r">
<div data-key="UzAX7r2LekvM" class="relative flex py-4 pt-2 pb-0 _dropHorizontal_2u9k6_23">
<div data-block-content="UzAX7r2LekvM" class="relative flex-1">
<div class="relative w-full" node="nCjrk5nKdJdu">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="nCjrk5nKdJdu">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="n7IjKIVx2IXg">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="oAlq9sVmDYYd"><span data-offset-key="oAlq9sVmDYYd:0">Obtain the latest version of the installation package from the official website or repository.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="771mO2Oo5sgw">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="771mO2Oo5sgw">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="jddeTwcctYAn">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="DlVPJn5XJMEV"><span data-offset-key="DlVPJn5XJMEV:0">Prepare the Environment:</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="DxuMJtEmt3Tm">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="DxuMJtEmt3Tm">
<div class="css-175oi2r r-13awgt0">
<div class="relative w-full" node="CZJL8bpqUeCI">
<div class="css-175oi2r">
<div data-key="CZJL8bpqUeCI" class="relative flex py-4 pt-2 pb-0 _dropHorizontal_2u9k6_23">
<div data-block-content="CZJL8bpqUeCI" class="relative flex-1">
<div class="relative w-full" node="k2iVPZKtPCzs">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="k2iVPZKtPCzs">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="TZWLlzfmxxrI">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="Vd0FywA0n5xU"><span data-offset-key="Vd0FywA0n5xU:0">Ensure all hardware and software requirements are met.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="IRGF0Tmz1Ir9">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="IRGF0Tmz1Ir9">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="fOhJ4QX9OcLF">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="dDjkXm0G6vMz"><span data-offset-key="dDjkXm0G6vMz:0">Verify that the web server and database server are installed and running.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="CvRJYsDlAs7G">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="CvRJYsDlAs7G">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="UWfpwjwa7fDW">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="0n56BsJzlge2"><span data-offset-key="0n56BsJzlge2:0">Run the Installer:</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="MBvixMBF0GQ8">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="MBvixMBF0GQ8">
<div class="css-175oi2r r-13awgt0">
<div class="relative w-full" node="olJK4A2abMzp">
<div class="css-175oi2r">
<div data-key="olJK4A2abMzp" class="relative flex py-4 pt-2 pb-0 _dropHorizontal_2u9k6_23">
<div data-block-content="olJK4A2abMzp" class="relative flex-1">
<div class="relative w-full" node="fpczrI81wmH8">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="fpczrI81wmH8">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="41QMeCLDkeAc">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="NIWxkMAWUZgm"><span data-offset-key="NIWxkMAWUZgm:0">Windows/macOS/Linux:</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="29LOI7YjcQsb">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="29LOI7YjcQsb">
<div class="css-175oi2r r-13awgt0">
<div class="relative w-full" node="HdMltFfDFYO6">
<div class="css-175oi2r">
<div data-key="HdMltFfDFYO6" class="relative flex py-4 pt-2 pb-0 _dropHorizontal_2u9k6_23">
<div data-block-content="HdMltFfDFYO6" class="relative flex-1">
<div class="relative w-full" node="2F4va8A2RX8G">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="2F4va8A2RX8G">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="EC56uwvR8O7W">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="ZIRMH4CFR6dL"><span data-offset-key="ZIRMH4CFR6dL:0">Launch the installation package.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="W5KrXc87pTrh">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="W5KrXc87pTrh">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="bCSLg0ZBz7uk"><br></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<p id="bkmrk-follow-the-on-screen"><span class="select-text text-left text-content-paragraph"><span data-key="eYsDX56ZUl3O"><span data-offset-key="eYsDX56ZUl3O:0">Follow the on-screen prompts to proceed with the installation.</span></span></span></p>
<div data-virtualparent="true" id="bkmrk-choose-the-destinati">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="4Qlo84TlxwgL">
<div class="css-175oi2r">
<div data-key="4Qlo84TlxwgL" class="relative flex py-4 pt-4 pb-4 _dropHorizontal_2u9k6_23">
<div data-block-content="4Qlo84TlxwgL" class="relative flex-1">
<div class="relative w-full" node="MBvixMBF0GQ8">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="MBvixMBF0GQ8">
<div class="css-175oi2r r-13awgt0">
<div class="relative w-full" node="olJK4A2abMzp">
<div class="css-175oi2r">
<div data-key="olJK4A2abMzp" class="relative flex py-4 pt-2 pb-0 _dropHorizontal_2u9k6_23">
<div data-block-content="olJK4A2abMzp" class="relative flex-1">
<div class="relative w-full" node="29LOI7YjcQsb">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="29LOI7YjcQsb">
<div class="css-175oi2r r-13awgt0">
<div class="relative w-full" node="HdMltFfDFYO6">
<div class="css-175oi2r">
<div data-key="HdMltFfDFYO6" class="relative flex py-4 pt-2 pb-0 _dropHorizontal_2u9k6_23">
<div data-block-content="HdMltFfDFYO6" class="relative flex-1">
<div class="relative w-full" node="W5KrXc87pTrh">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="W5KrXc87pTrh">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="bCSLg0ZBz7uk"><br></div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="ESdUTEC7oe39">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="ESdUTEC7oe39">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="vMXdHd1E7FhD">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="yX09SLJoqPns"><span data-offset-key="yX09SLJoqPns:0">Choose the destination directory for the installation.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="DMPdUZMTHvYg">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="DMPdUZMTHvYg">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="9jMdPkhSKaTh">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="9ikfMuAmn6eS"><span data-offset-key="9ikfMuAmn6eS:0">Verify Installation:</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="ZBelnEOjqvQY">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="ZBelnEOjqvQY">
<div class="css-175oi2r r-13awgt0">
<div class="relative w-full" node="Qk1ZQNdXt4AD">
<div class="css-175oi2r">
<div data-key="Qk1ZQNdXt4AD" class="relative flex py-4 pt-2 pb-0 _dropHorizontal_2u9k6_23">
<div data-block-content="Qk1ZQNdXt4AD" class="relative flex-1">
<div class="relative w-full" node="iaviXRS2LorY">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="iaviXRS2LorY">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="N8JTfBZIOQWH">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="rKrx73K9kEzG"><span data-offset-key="rKrx73K9kEzG:0">Once installation is complete, navigate to the installation directory.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="DizS9pwy3ztm">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="DizS9pwy3ztm">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="3R6aIUfrd98S">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="Ob1SRbySuiJF"><span data-offset-key="Ob1SRbySuiJF:0">Verify that all files have been correctly extracted and installed.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="SED6lue4chCg">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="SED6lue4chCg">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="BLYTqEkfIDvy">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="oWbYhqKooQbO"><span data-offset-key="oWbYhqKooQbO:0">Initial Setup:</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="9i7StD1U3SXn">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="9i7StD1U3SXn">
<div class="css-175oi2r r-13awgt0">
<div class="relative w-full" node="vinCwfP9x7hN">
<div class="css-175oi2r">
<div data-key="vinCwfP9x7hN" class="relative flex py-4 pt-2 pb-0 _dropHorizontal_2u9k6_23">
<div data-block-content="vinCwfP9x7hN" class="relative flex-1">
<div class="relative w-full" node="nRDVL0pQJefD">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="nRDVL0pQJefD">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="G6k0o7lPvddA">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="P8F5qqQ2OCJT"><span data-offset-key="P8F5qqQ2OCJT:0">Open your web browser and navigate to the application’s URL (e.g., http://localhost).</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="relative w-full" node="kzQ3wiKipkXs">
<div class="css-175oi2r">
<div class="relative flex-1 flex" data-block-content="kzQ3wiKipkXs">
<div class="css-175oi2r r-13awgt0">
<div class="relative" data-key="rXjipv7ja0VE">
<ul>
<li class="null"><span class="select-text text-left text-content-paragraph"><span data-key="qVJ7NbTfj4MW"><span data-offset-key="qVJ7NbTfj4MW:0">Follow the setup wizard to complete the initial configuration.</span></span></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-c.-configuration-and">
<div id="bkmrk-c.-configuration-and-1" data-key="vFEJsiLSwbsO"><strong><span data-key="sedn1XRGZxqD"><span data-offset-key="sedn1XRGZxqD:0" data-slate-leaf="true">C. Configuration and Setup Steps</span></span></strong></div>
<div data-key="vFEJsiLSwbsO"><br></div>
</div>
<div data-virtualparent="true" data-slate-fragment="JTdCJTIyb2JqZWN0JTIyJTNBJTIyZG9jdW1lbnQlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJoZWFkaW5nLTMlMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkEuJTIwU3lzdGVtJTIwUmVxdWlyZW1lbnRzJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJMZ0kzcW5yOUdmblAlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ6elhXSDFUMVNxaDElMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkhhcmR3YXJlJTIwUmVxdWlyZW1lbnRzJTNBJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJtYXJrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmJvbGQlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTdEJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyRFNSYW1qNUV3SXBjJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyTHJUdm5qU21MQVZYJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC11bm9yZGVyZWQlMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJQcm9jZXNzb3IlM0ElMjBNaW5pbXVtJTIwMiUyMEdIeiUyMGR1YWwtY29yZSUyMHByb2Nlc3NvciUyMChyZWNvbW1lbmRlZCUzQSUyMDQlMjBHSHolMjBxdWFkLWNvcmUlMjBvciUyMGhpZ2hlcikuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJQdnA3UzBWWDNET28lMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJxalZRWVpZejNzbEolMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJKMFU4UUliaEVJazQlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyUkFNJTNBJTIwTWluaW11bSUyMDQlMjBHQiUyMChyZWNvbW1lbmRlZCUzQSUyMDglMjBHQiUyMG9yJTIwbW9yZSkuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI3cXE2alRtWWtGSVolMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjIxWEZFb3l6S0VPN2clMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI4OFBQOHVkWWJtZWMlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyU3RvcmFnZSUzQSUyME1pbmltdW0lMjAxMCUyMEdCJTIwb2YlMjBhdmFpbGFibGUlMjBkaXNrJTIwc3BhY2UlMjBmb3IlMjBpbnN0YWxsYXRpb24lMjAocmVjb21tZW5kZWQlM0ElMjBTU0QlMjB3aXRoJTIwYWRkaXRpb25hbCUyMHNwYWNlJTIwZm9yJTIwZGF0YSUyMHN0b3JhZ2UpLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyaHpJMzc3MkMwdXpVJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyOW1aYnpoVW9RTEZsJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyMHpiQmNaTVVValZ6JTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMk5ldHdvcmslM0ElMjBTdGFibGUlMjBpbnRlcm5ldCUyMGNvbm5lY3Rpb24lMjAocmVjb21tZW5kZWQlM0ElMjBicm9hZGJhbmQpLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyd1VQa2NYU0t1TjdmJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyVDZURlFrZ3JQUEpjJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyQlZOYjNaanVvTGJ6JTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyaEYwWDhWbmliYmtNJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJTb2Z0d2FyZSUyMFJlcXVpcmVtZW50cyUzQSUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybWFyayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJib2xkJTIyJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCU3RCU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMk9jTUt6V05JZzA2QSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmt4c2FYQzhCQWgxcyUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtdW5vcmRlcmVkJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyT3BlcmF0aW5nJTIwU3lzdGVtJTNBJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ1WU5oeVRzN0JMdnAlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJmMXJWbnVDbWliNE4lMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJNWjlvOUcwSVQ4eVAlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyV2luZG93cyUyMDEwJTIwb3IlMjBsYXRlciUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyWE14ZGZpd2xnc1NwJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyYzBSWGV4TGY5Z3hwJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyT1M2SGVGVUJKRjdSJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMm1hY09TJTIwMTAuMTQlMjAoTW9qYXZlKSUyMG9yJTIwbGF0ZXIlMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmtzV1JZS2trQ2VCbSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmFQNUZhdjE0b0hKNiUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMjFWV0Q4aHpVYlYyZiUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJMaW51eCUyMChVYnVudHUlMjAxOC4wNCUyMG9yJTIwbGF0ZXIlMkMlMjBDZW50T1MlMjA3JTIwb3IlMjBsYXRlciklMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmVOM3lkalpQdEk1ZyUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlkweTBJeG9VV01ybSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlBEZ2R0UE03YkVyZCUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJXZWIlMjBCcm93c2VyJTNBJTIwTGF0ZXN0JTIwdmVyc2lvbnMlMjBvZiUyMEdvb2dsZSUyMENocm9tZSUyQyUyME1vemlsbGElMjBGaXJlZm94JTJDJTIwU2FmYXJpJTJDJTIwb3IlMjBNaWNyb3NvZnQlMjBFZGdlLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyYjdrb0UzaE5LS25rJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIycE5vU284ZmdKdlA1JTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyT3g0SDJEdEFuZEV2JTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMldlYiUyMFNlcnZlciUzQSUyMEFwYWNoZSUyMDIuNCUyMG9yJTIwbGF0ZXIlMkMlMjBOZ2lueCUyMDEuMTQlMjBvciUyMGxhdGVyLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyeWhtdVgyMEk2U0p3JTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyUHVsMUo5UENnOXRxJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyZ0tHM2ROYVVVS1pMJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkRhdGFiYXNlJTNBJTIwTXlTUUwlMjA1LjclMjBvciUyMGxhdGVyJTJDJTIwUG9zdGdyZVNRTCUyMDkuNiUyMG9yJTIwbGF0ZXIuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJrV2xsRHhFYmM1RUUlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJNcU15UlM2MTIyZDclMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ3MEI4ZjlWRDlYMFAlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyUEhQJTNBJTIwVmVyc2lvbiUyMDcuNCUyMG9yJTIwbGF0ZXIuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJRdElIZk9CbnBmZDklMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJZNEQ5TmEyNm1IZ3ElMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ1WVhvZlNwa3VTUDElMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIySmF2YVNjcmlwdCUyMFJ1bnRpbWUlM0ElMjBOb2RlLmpzJTIwMTQueCUyMG9yJTIwbGF0ZXIlMjAoZm9yJTIwd2ViSURFJTIwZmVhdHVyZXMpLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyTnhXWUFId29iWW85JTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyZXQ1T3AzUloyWW5GJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyY2Q1a0Y1cGlwRTlNJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyMjNNQjVkbFJYUXQxJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIyaGVhZGluZy0zJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJCLiUyMEluc3RhbGxhdGlvbiUyMEluc3RydWN0aW9ucyUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyUmFLWEt6TzlkWk9ZJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyUkRCVkZ6alhQQ3QyJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC11bm9yZGVyZWQlMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJEb3dubG9hZCUyMHRoZSUyMFNvZnR3YXJlJTNBJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJPZGxKbWdFdGtzRVUlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJhTFdIWnpQQ2QyUTUlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJxS08ySWtUSkdzTkYlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjIwUmlvYUptdlhsc3YlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJQcWhUVVpuMHZhbG0lMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LXVub3JkZXJlZCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMk9idGFpbiUyMHRoZSUyMGxhdGVzdCUyMHZlcnNpb24lMjBvZiUyMHRoZSUyMGluc3RhbGxhdGlvbiUyMHBhY2thZ2UlMjBmcm9tJTIwdGhlJTIwb2ZmaWNpYWwlMjB3ZWJzaXRlJTIwb3IlMjByZXBvc2l0b3J5LiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyb0FscTlzVm1EWVlkJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIybjdJaktJVngySVhnJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIybkNqcms1bktkSmR1JTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyVXpBWDdyMkxla3ZNJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyRkh1MFM1VG1ISWNKJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMlByZXBhcmUlMjB0aGUlMjBFbnZpcm9ubWVudCUzQSUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyRGxWUEpuNVhKTUVWJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyamRkZVR3Y2N0WUFuJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyNzcxbU8yT281c2d3JTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIydmtRdHl0c3FKOXJHJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyNlpoWGJyS21XODZVJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC11bm9yZGVyZWQlMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJFbnN1cmUlMjBhbGwlMjBoYXJkd2FyZSUyMGFuZCUyMHNvZnR3YXJlJTIwcmVxdWlyZW1lbnRzJTIwYXJlJTIwbWV0LiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyVmQwRnl3QTBuNXhVJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyVFpXTGx6Zm14eHJJJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyazJpVlBaS3RQQ3pzJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMlZlcmlmeSUyMHRoYXQlMjB0aGUlMjB3ZWIlMjBzZXJ2ZXIlMjBhbmQlMjBkYXRhYmFzZSUyMHNlcnZlciUyMGFyZSUyMGluc3RhbGxlZCUyMGFuZCUyMHJ1bm5pbmcuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJkRGprWG0wRzZ2TXolMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJmT2hKNFFYOU9jTEYlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJJUkdGMFRtejFJcjklMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJDWkpMOGJwcVVlQ0klMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJEeHVNSnRFbXQzVG0lMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyUnVuJTIwdGhlJTIwSW5zdGFsbGVyJTNBJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjIwbjU2QnNKemxnZTIlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJVV2Zwd2p3YTdmRFclMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJDdlJKWXNEbEFzN0clMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJXWDgweWtLR2w2WXQlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ1dERWRnlsQTN0WkMlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LXVub3JkZXJlZCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMldpbmRvd3MlMkZtYWNPUyUyRkxpbnV4JTNBJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJOSVd4a01BV1VaZ20lMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI0MVFNZUNMRGtlQWMlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJmcGN6ckk4MXdtSDglMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJkNTJXRGRtbFJ0RGslMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJFUnZiNFdET2x2Q3klMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LXVub3JkZXJlZCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkxhdW5jaCUyMHRoZSUyMGluc3RhbGxhdGlvbiUyMHBhY2thZ2UuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJaSVJNSDRDRlI2ZEwlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJFQzU2dXd2UjhPN1clMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjIyRjR2YThBMlJYOEclMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyRm9sbG93JTIwdGhlJTIwb24tc2NyZWVuJTIwcHJvbXB0cyUyMHRvJTIwcHJvY2VlZCUyMHdpdGglMjB0aGUlMjBpbnN0YWxsYXRpb24uJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJlWXNEWDU2WlVsM08lMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJiQ1NMZzBaQno3dWslMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJXNUtyWGM4N3BUcmglMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyQ2hvb3NlJTIwdGhlJTIwZGVzdGluYXRpb24lMjBkaXJlY3RvcnklMjBmb3IlMjB0aGUlMjBpbnN0YWxsYXRpb24uJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ5WDA5U0xKb3FQbnMlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ2TVhkSGQxRTdGaEQlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJFU2RVVEVDN29lMzklMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJIZE1sdEZmREZZTzYlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjIyOUxPSTdZamNRc2IlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJvbEpLNEEyYWJNenAlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJNQnZpeE1CRjBHUTglMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyVmVyaWZ5JTIwSW5zdGFsbGF0aW9uJTNBJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI5aWtmTXVBbW42ZVMlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI5ak1kUGtoU0thVGglMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJETVBkVVpNVEh2WWclMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ6V3ZuQW10ZkREeHYlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ3VktvVU91NlBwa2QlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LXVub3JkZXJlZCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMk9uY2UlMjBpbnN0YWxsYXRpb24lMjBpcyUyMGNvbXBsZXRlJTJDJTIwbmF2aWdhdGUlMjB0byUyMHRoZSUyMGluc3RhbGxhdGlvbiUyMGRpcmVjdG9yeS4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnJLcng3M0s5a0V6RyUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMk44SlRmQlpJT1FXSCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmlhdmlYUlMyTG9yWSUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJWZXJpZnklMjB0aGF0JTIwYWxsJTIwZmlsZXMlMjBoYXZlJTIwYmVlbiUyMGNvcnJlY3RseSUyMGV4dHJhY3RlZCUyMGFuZCUyMGluc3RhbGxlZC4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMk9iMVNSYnlTdWlKRiUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMjNSNmFJVWZyZDk4UyUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkRpelM5cHd5M3p0bSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlFrMVpRTmRYdDRBRCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlpCZWxuRU9qcXZRWSUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJJbml0aWFsJTIwU2V0dXAlM0ElMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMm9XYllocUtvb1FiTyUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkJMWVRxRWtmSUR2eSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlNFRDZsdWU0Y2hDZyUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjIlMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlM0Z1dWdk1sWUx2ZCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMjlXRUgwR1BMRWVHQyUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtdW5vcmRlcmVkJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyT3BlbiUyMHlvdXIlMjB3ZWIlMjBicm93c2VyJTIwYW5kJTIwbmF2aWdhdGUlMjB0byUyMHRoZSUyMGFwcGxpY2F0aW9uJUUyJTgwJTk5cyUyMFVSTCUyMChlLmcuJTJDJTIwaHR0cCUzQSUyRiUyRmxvY2FsaG9zdCkuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJQOEY1cXFRMk9DSlQlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJHNmswbzdsUHZkZEElMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJuUkRWTDBwUUplZkQlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyRm9sbG93JTIwdGhlJTIwc2V0dXAlMjB3aXphcmQlMjB0byUyMGNvbXBsZXRlJTIwdGhlJTIwaW5pdGlhbCUyMGNvbmZpZ3VyYXRpb24uJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJxVko3TmJUZmo0TVclMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJyWGppcHY3amEwVkUlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJrelEzd2lLaXBrWHMlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ2aW5Dd2ZQOXg3aE4lMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI5aTdTdEQxVTNTWG4lMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI0UWxvODRUbHh3Z0wlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJoZWFkaW5nLTMlMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkMuJTIwQ29uZmlndXJhdGlvbiUyMGFuZCUyMFNldHVwJTIwU3RlcHMlMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnNlZG4xWFJHWnhxRCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnZGRUpzaUxTd2JzTyUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtdW5vcmRlcmVkJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyRGF0YWJhc2UlMjBDb25maWd1cmF0aW9uJTNBJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJYRFBqV21uNDFBYjYlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI1V2EzMmFvZERSUkQlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJiMVJycjE0MFlCQ2klMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJjS29QYXBWUUhud0ElMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJQYU1td25vMTZKblolMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LXVub3JkZXJlZCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkFjY2VzcyUyMHRoZSUyMGNvbmZpZ3VyYXRpb24lMjBmaWxlJTIwbG9jYXRlZCUyMGluJTIwdGhlJTIwaW5zdGFsbGF0aW9uJTIwZGlyZWN0b3J5JTIwKGUuZy4lMkMlMjBjb25maWclMkZkYXRhYmFzZS5waHApLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyMTRRSE1xTUhiN25rJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIySzVoNHAyRUJiY3VEJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIydmZpdXZSMjZiVDdkJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkVudGVyJTIwdGhlJTIwZGF0YWJhc2UlMjBjb25uZWN0aW9uJTIwZGV0YWlscyUyMChob3N0bmFtZSUyQyUyMHVzZXJuYW1lJTJDJTIwcGFzc3dvcmQlMkMlMjBkYXRhYmFzZSUyMG5hbWUpLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyQk00VEZqeFZpRnRqJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyTlJUNmdQbmgyeWtqJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyS3R3VnBMRDFXVkswJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMlNhdmUlMjB0aGUlMjBjaGFuZ2VzJTIwYW5kJTIwZW5zdXJlJTIwdGhhdCUyMHRoZSUyMGFwcGxpY2F0aW9uJTIwY2FuJTIwY29ubmVjdCUyMHRvJTIwdGhlJTIwZGF0YWJhc2UuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJLZUFlSmNoYkpYYW8lMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ0M05WbFRYZHdTNFolMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJQbElnRTJBeEU1dVQlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJoSWFIaXJSVW53T0UlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJhNXZmMW9EY3ZxRE4lMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyV2ViJTIwU2VydmVyJTIwQ29uZmlndXJhdGlvbiUzQSUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyRXo2aWE3QlhaNVZvJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyVHJkV1puTXNEb0lHJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyVng0Tks2UHg3SXRSJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyeGhzYUZVYTRrOGsxJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyTHQ1OFlhT25JN3V0JTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC11bm9yZGVyZWQlMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJDb25maWd1cmUlMjB5b3VyJTIwd2ViJTIwc2VydmVyJTIwdG8lMjBwb2ludCUyMHRvJTIwdGhlJTIwYXBwbGljYXRpb24lRTIlODAlOTlzJTIwZGlyZWN0b3J5LiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyQVAwWXdyQUY2dElrJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyYVkwdlNVM0ZmNWNqJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyR1lTaTdjZXZBcEVUJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkZvciUyMEFwYWNoZSUzQSUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyYXpwckh3dEdMTGpBJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIydEFtWW1FYWd0MjBFJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyaHltZ1Q1ZnhOemtqJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyNFRGU282OEd5a0dPJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyMWh1YlBDRGZrUENhJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC11bm9yZGVyZWQlMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJVcGRhdGUlMjB0aGUlMjBodHRwZC5jb25mJTIwb3IlMjBjcmVhdGUlMjBhJTIwdmlydHVhbCUyMGhvc3QlMjBjb25maWd1cmF0aW9uJTIwZmlsZSUyMHdpdGglMjB0aGUlMjBjb3JyZWN0JTIwZG9jdW1lbnQlMjByb290LiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyUmtReUp0Zk84bnBTJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyWEZYaWhkNWxxMU41JTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyV3gwaXRNNUV4WEd4JTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyUWNvbDBXZVdxV3VrJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyT1NBNXNQR2RWM2xVJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkZvciUyME5naW54JTNBJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJRWERMRHdpUVoyVDYlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJTWEpGOVVPS1hHTHMlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJSUUMyaHhabnBpVDUlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJGblBha2tHeXBZdm0lMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJRVktZcjNjQWxXbmMlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LXVub3JkZXJlZCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMlVwZGF0ZSUyMHRoZSUyMG5naW54LmNvbmYlMjBvciUyMGNyZWF0ZSUyMGElMjBzZXJ2ZXIlMjBibG9jayUyMGNvbmZpZ3VyYXRpb24lMjBmaWxlJTIwcG9pbnRpbmclMjB0byUyMHRoZSUyMGFwcGxpY2F0aW9uJUUyJTgwJTk5cyUyMGRpcmVjdG9yeS4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmlIVXV2bTZscVN1QiUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMk5BeTJGSzBhZTZ0ViUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnZBY0pjWGNEWjFLMiUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlJxQlhrZFZhT0pRRCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkN5SkNRV0VtblhKNyUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkVQclJBZDY2VFN3TiUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkJkZnM5YnFTc2dCTCUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJGaWxlJTIwUGVybWlzc2lvbnMlM0ElMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmRFQzJEYzh4YVZBRyUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnpNQ2JXTXAyeDB4TCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkN4dEdxUVdhY3VXcyUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjIlMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMm1ZU3NUcjR0eGtwMCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkNQOVFCbTh5YmcxeSUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtdW5vcmRlcmVkJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyU2V0JTIwYXBwcm9wcmlhdGUlMjBwZXJtaXNzaW9ucyUyMGZvciUyMHRoZSUyMGFwcGxpY2F0aW9uJTIwZGlyZWN0b3JpZXMlMjBhbmQlMjBmaWxlcy4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmdXUW5kdHNZR0p5SSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkhYbWczMFp1b0hFNCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMjdSOWZHTEVUMDBCSyUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJFbnN1cmUlMjB0aGF0JTIwdGhlJTIwd2ViJTIwc2VydmVyJTIwdXNlciUyMGhhcyUyMHdyaXRlJTIwYWNjZXNzJTIwdG8lMjBuZWNlc3NhcnklMjBkaXJlY3RvcmllcyUyMChlLmcuJTJDJTIwdXBsb2FkcyUyQyUyMGxvZ3MpLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIydmIwY3o2VXk4TFhtJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyMHVpOTZmT1VkckVJJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyUDk1bEZIdTNPemFoJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyejZSYXU2cUJiT3NiJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyem1DQ0VlcWpCaWFqJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkFwcGxpY2F0aW9uJTIwQ29uZmlndXJhdGlvbiUzQSUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyZkRTZEFLWWlSOWFOJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyUDBDUUVWU1d4enhPJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIybXpiTUdLVTNyM1NzJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyeVRvNmFKU0tKNmZPJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIya0JGdzRzVXI1ZUt0JTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC11bm9yZGVyZWQlMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJPcGVuJTIwdGhlJTIwYXBwbGljYXRpb24lMjBpbiUyMHlvdXIlMjB3ZWIlMjBicm93c2VyJTIwYW5kJTIwbG9nJTIwaW4lMjB3aXRoJTIwdGhlJTIwZGVmYXVsdCUyMGFkbWluJTIwY3JlZGVudGlhbHMuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJBcHNRbmtTMFBnYkMlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJxZGh4aVZ4ZmZXdG0lMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJtcGMzdXNnbDNpQkklMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyTmF2aWdhdGUlMjB0byUyMHRoZSUyMHNldHRpbmdzJTIwc2VjdGlvbiUyMHRvJTIwY29uZmlndXJlJTIwYXBwbGljYXRpb24tc3BlY2lmaWMlMjBvcHRpb25zJTIwKGUuZy4lMkMlMjB1c2VyJTIwcm9sZXMlMkMlMjBzZWN1cml0eSUyMHNldHRpbmdzKS4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlVaUUVjZHJtblFhVSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnZaZFY2WkVRZm02TCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnd6WVB6OWdmcW0zTyUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmNDcjhHdGg4RVBMUSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMm9SU1o5UG9KUUUxNCUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJUZXN0aW5nJTIwYW5kJTIwVmFsaWRhdGlvbiUzQSUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyYlA4Vk1WcnllbGdaJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyNUtnS3o1aFp1ZWg3JTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyWFZDczc4aVMxbmxVJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyVVEwVmgxaUJ1cHVFJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyYWhlQzdMelVpRzlxJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC11bm9yZGVyZWQlMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJUZXN0JTIwdGhlJTIwYXBwbGljYXRpb24lRTIlODAlOTlzJTIwY29yZSUyMGZlYXR1cmVzJTIwdG8lMjBlbnN1cmUlMjBldmVyeXRoaW5nJTIwaXMlMjBmdW5jdGlvbmluZyUyMGNvcnJlY3RseS4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlZRSUJSUXJ0SmtDbiUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMjU0RjluZkllcFl3eiUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlFKMXZDMHo1cHQxZyUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJQZXJmb3JtJTIwYSUyMGZldyUyMHNhbXBsZSUyMGRvY3VtZW50JTIwdXBsb2FkcyUyQyUyMHdlYnNpdGUlMjBtYW5hZ2VtZW50JTIwdGFza3MlMkMlMjBhbmQlMjB3ZWJJREUlMjBvcGVyYXRpb25zLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIybGJVYXN3UUZrTVBEJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIycmVVcHM3YW1TaUplJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyMVJsRFo1bzUxeVIwJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyck9LOGpsdWF1a21rJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIydDJLdkRjM3BhY1BlJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkJhY2t1cCUyMGFuZCUyMFNlY3VyaXR5JTNBJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJoOG91M2xwMXNNUDklMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJiR3VYYXRpMjgyZGwlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJHNW1FczQ0Snp1SFAlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LWl0ZW0lMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJVU0hTQzBQTXdnZ1ElMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ4S3NjbGdQdWJQVEIlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJsaXN0LXVub3JkZXJlZCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIybGlzdC1pdGVtJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkNyZWF0ZSUyMGluaXRpYWwlMjBiYWNrdXBzJTIwb2YlMjB0aGUlMjBkYXRhYmFzZSUyMGFuZCUyMGNvbmZpZ3VyYXRpb24lMjBmaWxlcy4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmhHcmYyekFpWVh1dCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMjVkOElYRHBycGF3cSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmdpVGlJUFBiSlh0byUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmxpc3QtaXRlbSUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJSZXZpZXclMjBhbmQlMjBhcHBseSUyMHJlY29tbWVuZGVkJTIwc2VjdXJpdHklMjBzZXR0aW5ncyUyMHRvJTIwcHJvdGVjdCUyMHlvdXIlMjBpbnN0YWxsYXRpb24uJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJjd2FwUWFHdHBnMGElMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJuSnowdU40b3lRUjAlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI1YWRydzBldDZDZjQlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJqaFFwRUlMUHY5ZTIlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJpWVZUREowbWw5QmQlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ2cWNSRlB0cGN1RVglMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJDTUNac3E4SjBBa1klMjIlN0Q=" id="bkmrk-database-configurati">
<div data-key="vqcRFPtpcuEX">
<div data-key="b1Rrr140YBCi">
<div data-key="5Wa32aodDRRD"><strong><span data-key="XDPjWmn41Ab6"><span data-offset-key="XDPjWmn41Ab6:0" data-slate-leaf="true">Database Configuration:</span></span></strong></div>
</div>
<div data-key="a5vf1oDcvqDN">
<div data-key="PaMmwno16JnZ"><br></div>
<div data-key="hIaHirRUnwOE">
<div data-key="vfiuvR26bT7d">
<div data-key="K5h4p2EBbcuD"><span data-key="14QHMqMHb7nk"><span data-offset-key="14QHMqMHb7nk:0" data-slate-leaf="true">Access the configuration file located in the installation directory (e.g., config/database.php).</span></span></div>
</div>
<div data-key="KtwVpLD1WVK0">
<div data-key="NRT6gPnh2ykj"><span data-key="BM4TFjxViFtj"><span data-offset-key="BM4TFjxViFtj:0" data-slate-leaf="true">Enter the database connection details (hostname, username, password, database name).</span></span></div>
</div>
<div data-key="PlIgE2AxE5uT">
<div data-key="t3NVlTXdwS4Z"><span data-key="KeAeJchbJXao"><span data-offset-key="KeAeJchbJXao:0" data-slate-leaf="true">Save the changes and ensure that the application can connect to the database.</span></span></div>
</div>
</div>
</div>
<div data-key="Vx4NK6Px7ItR">
<div data-key="TrdWZnMsDoIG"><span data-key="Ez6ia7BXZ5Vo"><span data-offset-key="Ez6ia7BXZ5Vo:0" data-slate-leaf="true">Web Server Configuration:</span></span></div>
</div>
<div data-key="Bdfs9bqSsgBL">
<div data-key="Lt58YaOnI7ut"><br></div>
<div data-key="EPrRAd66TSwN">
<div data-key="GYSi7cevApET">
<div data-key="aY0vSU3Ff5cj"><span data-key="AP0YwrAF6tIk"><span data-offset-key="AP0YwrAF6tIk:0" data-slate-leaf="true">Configure your web server to point to the application’s directory.</span></span></div>
</div>
<div data-key="hymgT5fxNzkj">
<div data-key="tAmYmEagt20E"><span data-key="azprHwtGLLjA"><span data-offset-key="azprHwtGLLjA:0" data-slate-leaf="true">For Apache:</span></span></div>
</div>
<div data-key="OSA5sPGdV3lU">
<div data-key="1hubPCDfkPCa"><br></div>
<div data-key="Qcol0WeWqWuk">
<div data-key="Wx0itM5ExXGx">
<div data-key="XFXihd5lq1N5"><span data-key="RkQyJtfO8npS"><span data-offset-key="RkQyJtfO8npS:0" data-slate-leaf="true">Update the httpd.conf or create a virtual host configuration file with the correct document root.</span></span></div>
</div>
</div>
</div>
<div data-key="RQC2hxZnpiT5">
<div data-key="SXJF9UOKXGLs"><span data-key="QXDLDwiQZ2T6"><span data-offset-key="QXDLDwiQZ2T6:0" data-slate-leaf="true">For Nginx:</span></span></div>
</div>
<div data-key="CyJCQWEmnXJ7">
<div data-key="QVKYr3cAlWnc"><br></div>
<div data-key="RqBXkdVaOJQD">
<div data-key="vAcJcXcDZ1K2">
<div data-key="NAy2FK0ae6tV"><span data-key="iHUuvm6lqSuB"><span data-offset-key="iHUuvm6lqSuB:0" data-slate-leaf="true">Update the nginx.conf or create a server block configuration file pointing to the application’s directory.</span></span></div>
</div>
</div>
</div>
</div>
</div>
<div data-key="CxtGqQWacuWs">
<div data-key="zMCbWMp2x0xL"><span data-key="dEC2Dc8xaVAG"><span data-offset-key="dEC2Dc8xaVAG:0" data-slate-leaf="true">File Permissions:</span></span></div>
</div>
<div data-key="zmCCEeqjBiaj">
<div data-key="CP9QBm8ybg1y"><br></div>
<div data-key="z6Rau6qBbOsb">
<div data-key="7R9fGLET00BK">
<div data-key="HXmg30ZuoHE4"><span data-key="gWQndtsYGJyI"><span data-offset-key="gWQndtsYGJyI:0" data-slate-leaf="true">Set appropriate permissions for the application directories and files.</span></span></div>
</div>
<div data-key="P95lFHu3Ozah">
<div data-key="0ui96fOUdrEI"><span data-key="vb0cz6Uy8LXm"><span data-offset-key="vb0cz6Uy8LXm:0" data-slate-leaf="true">Ensure that the web server user has write access to necessary directories (e.g., uploads, logs).</span></span></div>
</div>
</div>
</div>
<div data-key="mzbMGKU3r3Ss">
<div data-key="P0CQEVSWxzxO"><span data-key="fDSdAKYiR9aN"><span data-offset-key="fDSdAKYiR9aN:0" data-slate-leaf="true">Application Configuration:</span></span></div>
</div>
<div data-key="oRSZ9PoJQE14">
<div data-key="kBFw4sUr5eKt"><br></div>
<div data-key="cCr8Gth8EPLQ">
<div data-key="mpc3usgl3iBI">
<div data-key="qdhxiVxffWtm"><span data-key="ApsQnkS0PgbC"><span data-offset-key="ApsQnkS0PgbC:0" data-slate-leaf="true">Open the application in your web browser and log in with the default admin credentials.</span></span></div>
</div>
<div data-key="wzYPz9gfqm3O">
<div data-key="vZdV6ZEQfm6L"><span data-key="UZQEcdrmnQaU"><span data-offset-key="UZQEcdrmnQaU:0" data-slate-leaf="true">Navigate to the settings section to configure application-specific options (e.g., user roles, security settings).</span></span></div>
</div>
</div>
</div>
<div data-key="XVCs78iS1nlU">
<div data-key="5KgKz5hZueh7"><span data-key="bP8VMVryelgZ"><span data-offset-key="bP8VMVryelgZ:0" data-slate-leaf="true">Testing and Validation:</span></span></div>
</div>
<div data-key="t2KvDc3pacPe">
<div data-key="aheC7LzUiG9q"><br></div>
<div data-key="rOK8jluaukmk">
<div data-key="QJ1vC0z5pt1g">
<div data-key="54F9nfIepYwz"><span data-key="VQIBRQrtJkCn"><span data-offset-key="VQIBRQrtJkCn:0" data-slate-leaf="true">Test the application’s core features to ensure everything is functioning correctly.</span></span></div>
</div>
<div data-key="1RlDZ5o51yR0">
<div data-key="reUps7amSiJe"><span data-key="lbUaswQFkMPD"><span data-offset-key="lbUaswQFkMPD:0" data-slate-leaf="true">Perform a few sample document uploads, website management tasks, and webIDE operations.</span></span></div>
</div>
</div>
</div>
<div data-key="G5mEs44JzuHP">
<div data-key="bGuXati282dl"><span data-key="h8ou3lp1sMP9"><span data-offset-key="h8ou3lp1sMP9:0" data-slate-leaf="true">Backup and Security:</span></span></div>
</div>
<div data-key="iYVTDJ0ml9Bd">
<div data-key="xKsclgPubPTB"><br></div>
<div data-key="jhQpEILPv9e2">
<div data-key="giTiIPPbJXto">
<div data-key="5d8IXDprpawq"><span data-key="hGrf2zAiYXut"><span data-offset-key="hGrf2zAiYXut:0" data-slate-leaf="true">Create initial backups of the database and configuration files.</span></span></div>
</div>
<div data-key="5adrw0et6Cf4">
<div data-key="nJz0uN4oyQR0"><span data-key="cwapQaGtpg0a"><span data-offset-key="cwapQaGtpg0a:0" data-slate-leaf="true">Review and apply recommended security settings to protect your installation.</span></span></div>
</div>
</div>
</div>
</div>
</div>            <div class="page-break"></div>

    <div class="chapter-hint">1. System Management</div>

<h1 id="page-16">1.1 Overview</h1>
<div data-virtualparent="true" id="bkmrk-1.1.1-user-informati">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="9q4iUshl3IUl">
<div class="css-175oi2r">
<div data-key="9q4iUshl3IUl" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="9q4iUshl3IUl" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="1knwO8cQm3SM"><span data-offset-key="1knwO8cQm3SM:0">1.1.1 User Information Real-time control of the total number of users, number of disabled users, number of users logged in on the day, and number of users online at the time.Background preview example 1</span></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-1.1.2-overview-of-to">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="0N0aAqzTzxdN">
<div class="css-175oi2r">
<div data-key="0N0aAqzTzxdN" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="0N0aAqzTzxdN" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="sZDZmufu1vjr"><span data-offset-key="sZDZmufu1vjr:0">1.1.2 Overview of total storage Real-time control of total storage usage, total number of files, and number of new files added on the day.</span></span></span><span class="select-text text-left text-content-paragraph"><span data-key="ed3ZrqU8VqCW"><span data-offset-key="ed3ZrqU8VqCW:0">Background preview example 2</span></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-1.1.3-overview-of-fi">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="9OI0YuFPuBJT">
<div class="css-175oi2r">
<div data-key="9OI0YuFPuBJT" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="9OI0YuFPuBJT" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="IZVNBQIWdfmq"><span data-offset-key="IZVNBQIWdfmq:0">1.1.3 Overview of file access information Real-time control over file upload, download, edit, and deletion.Background preview example 3</span></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-1.1.4-system-informa">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="EVcalyr0ttYo">
<div class="css-175oi2r">
<div data-key="EVcalyr0ttYo" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="EVcalyr0ttYo" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="VpM365MPaKZR"><span data-offset-key="VpM365MPaKZR:0">1.1.4 System Information Real-time control of system disks, storage disks, and server environmentsBackground preview example 4</span></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" data-slate-fragment="JTdCJTIyb2JqZWN0JTIyJTNBJTIyZG9jdW1lbnQlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMjEuMS4xJTIwVXNlciUyMEluZm9ybWF0aW9uJTIwUmVhbC10aW1lJTIwY29udHJvbCUyMG9mJTIwdGhlJTIwdG90YWwlMjBudW1iZXIlMjBvZiUyMHVzZXJzJTJDJTIwbnVtYmVyJTIwb2YlMjBkaXNhYmxlZCUyMHVzZXJzJTJDJTIwbnVtYmVyJTIwb2YlMjB1c2VycyUyMGxvZ2dlZCUyMGluJTIwb24lMjB0aGUlMjBkYXklMkMlMjBhbmQlMjBudW1iZXIlMjBvZiUyMHVzZXJzJTIwb25saW5lJTIwYXQlMjB0aGUlMjB0aW1lLkJhY2tncm91bmQlMjBwcmV2aWV3JTIwZXhhbXBsZSUyMDElMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkVvd3NEZjk1ZkFrSSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMjh6eU9xWEtmT2U5VSUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyMS4xLjIlMjBPdmVydmlldyUyMG9mJTIwdG90YWwlMjBzdG9yYWdlJTIwUmVhbC10aW1lJTIwY29udHJvbCUyMG9mJTIwdG90YWwlMjBzdG9yYWdlJTIwdXNhZ2UlMkMlMjB0b3RhbCUyMG51bWJlciUyMG9mJTIwZmlsZXMlMkMlMjBhbmQlMjBudW1iZXIlMjBvZiUyMG5ldyUyMGZpbGVzJTIwYWRkZWQlMjBvbiUyMHRoZSUyMGRheS4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnNaRFptdWZ1MXZqciUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMjBOMGFBcXpUenhkTiUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyQmFja2dyb3VuZCUyMHByZXZpZXclMjBleGFtcGxlJTIwMiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyZWQzWnJxVThWcUNXJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyNVROMkZSYzlsS2N5JTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjIxLjEuMyUyME92ZXJ2aWV3JTIwb2YlMjBmaWxlJTIwYWNjZXNzJTIwaW5mb3JtYXRpb24lMjBSZWFsLXRpbWUlMjBjb250cm9sJTIwb3ZlciUyMGZpbGUlMjB1cGxvYWQlMkMlMjBkb3dubG9hZCUyQyUyMGVkaXQlMkMlMjBhbmQlMjBkZWxldGlvbi5CYWNrZ3JvdW5kJTIwcHJldmlldyUyMGV4YW1wbGUlMjAzJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJJWlZOQlFJV2RmbXElMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI5T0kwWXVGUHVCSlQlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMjEuMS40JTIwU3lzdGVtJTIwSW5mb3JtYXRpb24lMjBSZWFsLXRpbWUlMjBjb250cm9sJTIwb2YlMjBzeXN0ZW0lMjBkaXNrcyUyQyUyMHN0b3JhZ2UlMjBkaXNrcyUyQyUyMGFuZCUyMHNlcnZlciUyMGVudmlyb25tZW50c0JhY2tncm91bmQlMjBwcmV2aWV3JTIwZXhhbXBsZSUyMDQlMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlZwTTM2NU1QYUtaUiUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkVWY2FseXIwdHRZbyUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyMS4xLjUlMjBEZXBhcnRtZW50JTJGVXNlciUyMFN0b3JhZ2UlMjBVc2FnZSUyMFByZXZpZXclMjBkZXBhcnRtZW50JTJGdXNlciUyMHN0b3JhZ2UlMjB1c2FnZSUyMHRocm91Z2glMjB0aW1lJTIwYW5kJTIwc3BhY2UlMjBtdWx0aXBsZSUyMHZpZXdzLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyT25LWFFNMkYwQ3pCJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyeGFZdVIxSXdvNU9MJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyZmFVM3ZGV1VPM3lFJTIyJTdE" id="bkmrk-1.1.5-department%2Fuse">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="xaYuR1Iwo5OL">
<div class="css-175oi2r">
<div data-key="xaYuR1Iwo5OL" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="xaYuR1Iwo5OL" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="OnKXQM2F0CzB"><span data-offset-key="OnKXQM2F0CzB:0">1.1.5 Department/User Storage Usage Preview department/user storage usage through time and space multiple views.</span></span></span></div>
</div>
</div>
</div>
</div>            <div class="page-break"></div>

    <div class="chapter-hint">1. System Management</div>

<h1 id="page-17">1.2 Basic settings</h1>
<div data-virtualparent="true" id="bkmrk-1.2.1-new-user-displ">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="ZxjstxjJBMqZ">
<div class="css-175oi2r">
<div data-key="ZxjstxjJBMqZ" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="ZxjstxjJBMqZ" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="99wz7Bkl1ncw"><span data-offset-key="99wz7Bkl1ncw:0">1.2.1 New user display settings Default creation directory for new users : used to set the folders displayed in "My Documents" (personal space) after the new user logs in for the first time. If the company encourages employees to develop the habit of data backup, "Personal file backup, company file backup" can be added to this item. As shown in the figure above, the corresponding effects of filling in "My Documents, My Pictures, My Music" are as follows:My document renderings</span></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-create-light-apps-by">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="TepUiXhQ1Wml">
<div class="css-175oi2r">
<div data-key="TepUiXhQ1Wml" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="TepUiXhQ1Wml" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="jMX4usSyBB3D"><span data-offset-key="jMX4usSyBB3D:0">Create light apps by default for new users : This is used to set which light apps are displayed on the desktop after a new user logs in for the first time. For example, you can add a light app called "adminer" according to company needs and add it to the light apps created by default. Then all new users will see the "Company Mailbox" app on their desktop after logging in for the first time.</span></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-automatic-login-for-">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="gKw0WkcZifIm">
<div class="css-175oi2r">
<div data-key="gKw0WkcZifIm" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="gKw0WkcZifIm" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="X4dlnHxDoefM"><span data-offset-key="X4dlnHxDoefM:0">Automatic login for visitors : Administrators can choose whether to allow automatic login for visitors. After turning it on, visitors can enter the default login page without logging in.</span></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-visitors-automatical">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="QpjS9m2aMVTv">
<div class="css-175oi2r">
<div data-key="QpjS9m2aMVTv" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="QpjS9m2aMVTv" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="ne5OmXwAkkiq"><mark class="r-crgep1" data-slate-leaf="true"><strong class="r-crgep1 r-b88u0q" data-slate-leaf="true" data-offset-key="ne5OmXwAkkiq:0">Visitors automatically log in , you must ensure:The guest account guest/guest already exists; The login verification code function is not enabled.</strong></mark></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-default-login-page-a">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="kx9UnZtSW93N">
<div class="css-175oi2r">
<div data-key="kx9UnZtSW93N" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="kx9UnZtSW93N" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="xY1Hyhmxo2KM"><span data-offset-key="xY1Hyhmxo2KM:0">Default login page after login : Administrators can select the default user login page according to their needs. For example, if the administrator selects "Desktop", the page displayed after the user logs in is the desktop.</span></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-illustrate%3A-in-the-s">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="kNL7CZbbAZh3">
<div class="css-175oi2r">
<div data-key="kNL7CZbbAZh3" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="kNL7CZbbAZh3" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="6QWgFVgVv87v"><strong class="r-crgep1 r-b88u0q" data-slate-leaf="true"><em class="r-crgep1 r-36ujnk" data-slate-leaf="true"><mark class="r-crgep1" data-slate-leaf="true" data-offset-key="6QWgFVgVv87v:0">illustrate: In the system settings, the dial switch is displayed in blue when it is on.</mark></em></strong></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-1.2.2-security-as-a-">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="89lguwL9GUl7">
<div class="css-175oi2r">
<div data-key="89lguwL9GUl7" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="89lguwL9GUl7" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="kr7PogCGOcnR"><span data-offset-key="kr7PogCGOcnR:0">1.2.2 Security As a private document management system, Kedao Cloud is well aware of the importance of data security to users. From the inherent security requirements of the underlying architecture design to the system deployment plan, we provide multiple strategies to ensure security. The security setting option provides optional settings at the administrator level.</span></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-login-verification-c">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="M6GiKlmK7ZX6">
<div class="css-175oi2r">
<div data-key="M6GiKlmK7ZX6" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="M6GiKlmK7ZX6" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="tsa2m7q240I3"><span data-offset-key="tsa2m7q240I3:0">Login verification code Kedao Cloud supports multi-platform login with a single account. Users can log in to Kedao Cloud accounts on different platforms. Human-machine verification can be set during the login process. After it is turned on, users need to enter a verification code to log in. Turning on the login verification code can facilitate human-machine verification and effectively prevent malicious cracking. Password strength supports normal, medium and high password strength combinations for administrators to choose and set, which can effectively prevent weak passwords and password locks. After 5 consecutive incorrect password entries, the account will enter the lock stage to prevent brute force cracking. CSRF Protection CSRF (Cross-site request forgery) refers to cross-site request forgery, also known as "One Click Attack" or Session Riding, which exploits trusted websites by disguising requests from trusted users. Kedao Cloud provides a CSRF protection switch. Turning on the CSRF protection function can help users effectively prevent most of these attacks.</span></span></span></div>
</div>
</div>
</div>
</div>
<div data-virtualparent="true" id="bkmrk-illustrate%3A-after-tu">
<div data-key="5hjr82HJGlTt"><span data-key="T8SYaa2Erns6"><span data-offset-key="T8SYaa2Erns6:0" data-slate-leaf="true">illustrate: After turning on CSRF protection, if a system error is displayed and the prompt "token_error" is displayed, it means that there is a problem with the server configuration. Please try to configure the server security policy to support anti-CSRF attacks. You can choose to temporarily turn off the CSRF protection function in the system settings before using it. In this case, please pay attention to the security risks.</span></span></div>
</div>
<div data-virtualparent="true" id="bkmrk-root-directory-acces">
<div data-key="BJUny6lnDmBO"><span data-key="2dwwNLOd33X1"><span data-offset-key="2dwwNLOd33X1:0" data-slate-leaf="true">Root Directory Access After enabling root directory permissions, administrators can enter the physical path in the KeDao Cloud address bar to access all directories on other servers. You can switch directories through the address bar, or directly enter other disks (for example, enter C:/ to enter the system C drive), so that administrators can more conveniently manage other files on the server. Conversely, after disabling permissions, administrators can only access the directory where KeDao Cloud is located.</span></span></div>
</div>
<div data-virtualparent="true" id="bkmrk-illustrate%3A-given-th">
<div data-key="MoBm9X4jWRvk"><span data-key="g8dNwI8u6Fca"><span data-offset-key="g8dNwI8u6Fca:0" data-slate-leaf="true">illustrate: Given that the root directory has extensive permissions, it is recommended that administrators make a comprehensive and prudent assessment based on security and management convenience, configure the directory according to their actual needs, and decide whether to enable the root directory access function by modifying the PHP cross-site protection open_basedir parameter.</span></span></div>
</div>
<div data-virtualparent="true" id="bkmrk-file-storage-encrypt">
<div data-key="tLPI5YzkzYYd"><span data-key="k9ZKXvSrzp35"><span data-offset-key="k9ZKXvSrzp35:0" data-slate-leaf="true">File storage encryption Kedao Cloud removes the suffix metadata of uploaded files for encrypted storage to avoid being attacked by uploaded Trojan files , and can effectively prevent ransomware damage . After encrypting and uniformly storing uploaded files, it can also prevent malicious users from directly obtaining files from the disk based on the directory or file name, which is conducive to the company's internal control work. Full encryption: Even if you have server permissions, you cannot know the true content of the file; it can effectively prevent damage such as ransomware and viruses; Keep extension: Encrypt the file name and keep the file extension; No encryption: Do not encrypt the file name and keep the original file name; (To ensure security, the uploaded folder name is encrypted) By default, Kedao Cloud uses full encryption for storage (strongly recommended). Administrators can also set it up based on the visibility requirements of the backend data.</span></span></div>
</div>
<div data-virtualparent="true" id="bkmrk-1.2.3-user-registrat">
<div data-key="3PXaABTiJeie"><span data-key="Qlj9oX5Gc609"><span data-offset-key="Qlj9oX5Gc609:0" data-slate-leaf="true">1.2.3 User registration and quick Third-party login In order to facilitate users to register and log in more conveniently, Kedao Cloud has integrated third-party login modules such as WeChat, QQ, Github, etc. Administrators can check the shortcut login method allowed for users. Enable user registration. After enabling this function, users can self-register on the system login page through various modes such as quick login registration, email registration, and mobile phone registration. Enable registration review After enabling this function, users who register by themselves can activate their accounts and log in normally only after passing the review of the administrator. Default settings for registered users Administrators can set the default space size for self-registered users, the type of permission role group they belong to, the department they are in, and the corresponding permissions. 1.2.4 Upload and download settings and Upload speed optimization Administrators can set parameters such as upload segment size and concurrent threads to optimize the upload speed. Upload Settings You can set the number of automatic retransmissions when the upload fails, the number of files to be ignored during upload, and other items. Download speed limit: Limit the download speed. For websites with large concurrency, a unified speed limit can be set. External link sharing and package downloading External link sharing folders support package compression downloading. Large concurrent downloading will occupy server performanceUpload and download</span></span></div>
</div>
<div data-virtualparent="true" id="bkmrk-hint%3A-upload-and-dow">
<div data-key="fMlxCI15vhBu"><span data-key="1TcdhSTG1RwC"><span data-offset-key="1TcdhSTG1RwC:0" data-slate-leaf="true">hint: Upload and download are for users to deploy and configure by themselves. For those who need to optimize the transmission rate, please refer to the configuration optimization document </span></span></div>
</div>
<div data-virtualparent="true" id="bkmrk-1.2.5-email-the-mail">
<div data-key="M29hb6uvHx9g"><span data-key="sI7futwL71bi"><span data-offset-key="sI7futwL71bi:0" data-slate-leaf="true">1.2.5 Email The mailbox server can be used for user registration, password retrieval, system notifications, etc.</span></span></div>
</div>
<div data-virtualparent="true" id="bkmrk-by-default%2C-the-syst">
<div data-key="Qx8jmjvog9DM"><span data-key="BYr5AFYFEBim"><span data-offset-key="BYr5AFYFEBim:0" data-slate-leaf="true">By default, the system uses the mail server officially provided by Kedaoyun to send mail to users. After the administrator configures the mail server, use the customized mail service to send system information 1.2.6 Website registration number/other In "System Settings" &gt; "Basic Settings" &gt; "Other Settings" , you can customize the website registration number information.</span></span></div>
</div>
<div data-virtualparent="true" id="bkmrk-clear-cache-clicking">
<div data-key="C1Ps3PoPZRj4"><span data-key="fl0qx4fCLSfz"><span data-offset-key="fl0qx4fCLSfz:0" data-slate-leaf="true">Clear cache Clicking this operation will clear the cache in system temporary directories such as data/temp.</span></span></div>
</div>
<div data-virtualparent="true" id="bkmrk-illustrate%3A-after-pe">
<div data-key="mSx7am6oTOR3"><span data-key="AJE3Cran9hes"><span data-offset-key="AJE3Cran9hes:0" data-slate-leaf="true"> illustrate: After performing this operation, the preview server cache of AutoCAD and other format files will also be cleared, which may affect the preview speed.</span></span></div>
</div>
<div data-virtualparent="true" id="bkmrk-customizing-global-c">
<div data-key="7JV44Sm0GjcB"><span data-key="HXp1ACF5r8di"><span data-offset-key="HXp1ACF5r8di:0" data-slate-leaf="true">Customizing global CSS provides powerful extensibility. Administrators can customize functions including but not limited to the following: Remove random desktop wallpapers Only Chinese is retained in multiple languages Customize the user desktop folder directory Configure the static file CDN access URL Configure plugin static files to CDN .</span></span></div>
</div>
<div data-virtualparent="true" id="bkmrk-illustrate%3A-for-more">
<div data-key="RnYDj7ekEkse"><span data-key="7V5YOJmCceeL"><span data-offset-key="7V5YOJmCceeL:0" data-slate-leaf="true">illustrate: For more customization requirements, please refer to the API documentation</span></span></div>
</div>
<div data-virtualparent="true" data-slate-fragment="JTdCJTIyb2JqZWN0JTIyJTNBJTIyZG9jdW1lbnQlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMjEuMi4xJTIwTmV3JTIwdXNlciUyMGRpc3BsYXklMjBzZXR0aW5ncyUyMERlZmF1bHQlMjBjcmVhdGlvbiUyMGRpcmVjdG9yeSUyMGZvciUyMG5ldyUyMHVzZXJzJTIwJTNBJTIwdXNlZCUyMHRvJTIwc2V0JTIwdGhlJTIwZm9sZGVycyUyMGRpc3BsYXllZCUyMGluJTIwJTVDJTIyTXklMjBEb2N1bWVudHMlNUMlMjIlMjAocGVyc29uYWwlMjBzcGFjZSklMjBhZnRlciUyMHRoZSUyMG5ldyUyMHVzZXIlMjBsb2dzJTIwaW4lMjBmb3IlMjB0aGUlMjBmaXJzdCUyMHRpbWUuJTIwSWYlMjB0aGUlMjBjb21wYW55JTIwZW5jb3VyYWdlcyUyMGVtcGxveWVlcyUyMHRvJTIwZGV2ZWxvcCUyMHRoZSUyMGhhYml0JTIwb2YlMjBkYXRhJTIwYmFja3VwJTJDJTIwJTVDJTIyUGVyc29uYWwlMjBmaWxlJTIwYmFja3VwJTJDJTIwY29tcGFueSUyMGZpbGUlMjBiYWNrdXAlNUMlMjIlMjBjYW4lMjBiZSUyMGFkZGVkJTIwdG8lMjB0aGlzJTIwaXRlbS4lMjBBcyUyMHNob3duJTIwaW4lMjB0aGUlMjBmaWd1cmUlMjBhYm92ZSUyQyUyMHRoZSUyMGNvcnJlc3BvbmRpbmclMjBlZmZlY3RzJTIwb2YlMjBmaWxsaW5nJTIwaW4lMjAlNUMlMjJNeSUyMERvY3VtZW50cyUyQyUyME15JTIwUGljdHVyZXMlMkMlMjBNeSUyME11c2ljJTVDJTIyJTIwYXJlJTIwYXMlMjBmb2xsb3dzJTNBTXklMjBkb2N1bWVudCUyMHJlbmRlcmluZ3MlMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmw4bUJHMFpJczJheSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlhTdlJBS0MyajJzdiUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyQ3JlYXRlJTIwbGlnaHQlMjBhcHBzJTIwYnklMjBkZWZhdWx0JTIwZm9yJTIwbmV3JTIwdXNlcnMlMjAlM0ElMjBUaGlzJTIwaXMlMjB1c2VkJTIwdG8lMjBzZXQlMjB3aGljaCUyMGxpZ2h0JTIwYXBwcyUyMGFyZSUyMGRpc3BsYXllZCUyMG9uJTIwdGhlJTIwZGVza3RvcCUyMGFmdGVyJTIwYSUyMG5ldyUyMHVzZXIlMjBsb2dzJTIwaW4lMjBmb3IlMjB0aGUlMjBmaXJzdCUyMHRpbWUuJTIwRm9yJTIwZXhhbXBsZSUyQyUyMHlvdSUyMGNhbiUyMGFkZCUyMGElMjBsaWdodCUyMGFwcCUyMGNhbGxlZCUyMCU1QyUyMmFkbWluZXIlNUMlMjIlMjBhY2NvcmRpbmclMjB0byUyMGNvbXBhbnklMjBuZWVkcyUyMGFuZCUyMGFkZCUyMGl0JTIwdG8lMjB0aGUlMjBsaWdodCUyMGFwcHMlMjBjcmVhdGVkJTIwYnklMjBkZWZhdWx0LiUyMFRoZW4lMjBhbGwlMjBuZXclMjB1c2VycyUyMHdpbGwlMjBzZWUlMjB0aGUlMjAlNUMlMjJDb21wYW55JTIwTWFpbGJveCU1QyUyMiUyMGFwcCUyMG9uJTIwdGhlaXIlMjBkZXNrdG9wJTIwYWZ0ZXIlMjBsb2dnaW5nJTIwaW4lMjBmb3IlMjB0aGUlMjBmaXJzdCUyMHRpbWUuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJqTVg0dXNTeUJCM0QlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJUZXBVaVhoUTFXbWwlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkF1dG9tYXRpYyUyMGxvZ2luJTIwZm9yJTIwdmlzaXRvcnMlMjAlM0ElMjBBZG1pbmlzdHJhdG9ycyUyMGNhbiUyMGNob29zZSUyMHdoZXRoZXIlMjB0byUyMGFsbG93JTIwYXV0b21hdGljJTIwbG9naW4lMjBmb3IlMjB2aXNpdG9ycy4lMjBBZnRlciUyMHR1cm5pbmclMjBpdCUyMG9uJTJDJTIwdmlzaXRvcnMlMjBjYW4lMjBlbnRlciUyMHRoZSUyMGRlZmF1bHQlMjBsb2dpbiUyMHBhZ2UlMjB3aXRob3V0JTIwbG9nZ2luZyUyMGluLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyWDRkbG5IeERvZWZNJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyZ0t3MFdrY1ppZkltJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJWaXNpdG9ycyUyMGF1dG9tYXRpY2FsbHklMjBsb2clMjBpbiUyMCUyQyUyMHlvdSUyMG11c3QlMjBlbnN1cmUlM0FUaGUlMjBndWVzdCUyMGFjY291bnQlMjBndWVzdCUyRmd1ZXN0JTIwYWxyZWFkeSUyMGV4aXN0cyUzQiUyMFRoZSUyMGxvZ2luJTIwdmVyaWZpY2F0aW9uJTIwY29kZSUyMGZ1bmN0aW9uJTIwaXMlMjBub3QlMjBlbmFibGVkLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybWFyayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJib2xkJTIyJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMm1hcmslMjIlMkMlMjJ0eXBlJTIyJTNBJTIyY29sb3IlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTIyYmFja2dyb3VuZCUyMiUzQSUyMnB1cnBsZSUyMiUyQyUyMnRleHQlMjIlM0ElMjJkZWZhdWx0JTIyJTdEJTdEJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIybmU1T21Yd0Fra2lxJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyUXBqUzltMmFNVlR2JTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJEZWZhdWx0JTIwbG9naW4lMjBwYWdlJTIwYWZ0ZXIlMjBsb2dpbiUyMCUzQSUyMEFkbWluaXN0cmF0b3JzJTIwY2FuJTIwc2VsZWN0JTIwdGhlJTIwZGVmYXVsdCUyMHVzZXIlMjBsb2dpbiUyMHBhZ2UlMjBhY2NvcmRpbmclMjB0byUyMHRoZWlyJTIwbmVlZHMuJTIwRm9yJTIwZXhhbXBsZSUyQyUyMGlmJTIwdGhlJTIwYWRtaW5pc3RyYXRvciUyMHNlbGVjdHMlMjAlNUMlMjJEZXNrdG9wJTVDJTIyJTJDJTIwdGhlJTIwcGFnZSUyMGRpc3BsYXllZCUyMGFmdGVyJTIwdGhlJTIwdXNlciUyMGxvZ3MlMjBpbiUyMGlzJTIwdGhlJTIwZGVza3RvcC4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnhZMUh5aG14bzJLTSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmt4OVVuWnRTVzkzTiUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyaWxsdXN0cmF0ZSUzQSUyMCUyMEluJTIwdGhlJTIwc3lzdGVtJTIwc2V0dGluZ3MlMkMlMjB0aGUlMjBkaWFsJTIwc3dpdGNoJTIwaXMlMjBkaXNwbGF5ZWQlMjBpbiUyMGJsdWUlMjB3aGVuJTIwaXQlMjBpcyUyMG9uLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybWFyayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJib2xkJTIyJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMm1hcmslMjIlMkMlMjJ0eXBlJTIyJTNBJTIyY29sb3IlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTIyYmFja2dyb3VuZCUyMiUzQSUyMnB1cnBsZSUyMiUyQyUyMnRleHQlMjIlM0ElMjJkZWZhdWx0JTIyJTdEJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIybWFyayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJpdGFsaWMlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTdEJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyNlFXZ0ZWZ1Z2ODd2JTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIya05MN0NaYmJBWmgzJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjIxLjIuMiUyMFNlY3VyaXR5JTIwQXMlMjBhJTIwcHJpdmF0ZSUyMGRvY3VtZW50JTIwbWFuYWdlbWVudCUyMHN5c3RlbSUyQyUyMEtlZGFvJTIwQ2xvdWQlMjBpcyUyMHdlbGwlMjBhd2FyZSUyMG9mJTIwdGhlJTIwaW1wb3J0YW5jZSUyMG9mJTIwZGF0YSUyMHNlY3VyaXR5JTIwdG8lMjB1c2Vycy4lMjBGcm9tJTIwdGhlJTIwaW5oZXJlbnQlMjBzZWN1cml0eSUyMHJlcXVpcmVtZW50cyUyMG9mJTIwdGhlJTIwdW5kZXJseWluZyUyMGFyY2hpdGVjdHVyZSUyMGRlc2lnbiUyMHRvJTIwdGhlJTIwc3lzdGVtJTIwZGVwbG95bWVudCUyMHBsYW4lMkMlMjB3ZSUyMHByb3ZpZGUlMjBtdWx0aXBsZSUyMHN0cmF0ZWdpZXMlMjB0byUyMGVuc3VyZSUyMHNlY3VyaXR5LiUyMFRoZSUyMHNlY3VyaXR5JTIwc2V0dGluZyUyMG9wdGlvbiUyMHByb3ZpZGVzJTIwb3B0aW9uYWwlMjBzZXR0aW5ncyUyMGF0JTIwdGhlJTIwYWRtaW5pc3RyYXRvciUyMGxldmVsLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIya3I3UG9nQ0dPY25SJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyODlsZ3V3TDlHVWw3JTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJMb2dpbiUyMHZlcmlmaWNhdGlvbiUyMGNvZGUlMjBLZWRhbyUyMENsb3VkJTIwc3VwcG9ydHMlMjBtdWx0aS1wbGF0Zm9ybSUyMGxvZ2luJTIwd2l0aCUyMGElMjBzaW5nbGUlMjBhY2NvdW50LiUyMFVzZXJzJTIwY2FuJTIwbG9nJTIwaW4lMjB0byUyMEtlZGFvJTIwQ2xvdWQlMjBhY2NvdW50cyUyMG9uJTIwZGlmZmVyZW50JTIwcGxhdGZvcm1zLiUyMEh1bWFuLW1hY2hpbmUlMjB2ZXJpZmljYXRpb24lMjBjYW4lMjBiZSUyMHNldCUyMGR1cmluZyUyMHRoZSUyMGxvZ2luJTIwcHJvY2Vzcy4lMjBBZnRlciUyMGl0JTIwaXMlMjB0dXJuZWQlMjBvbiUyQyUyMHVzZXJzJTIwbmVlZCUyMHRvJTIwZW50ZXIlMjBhJTIwdmVyaWZpY2F0aW9uJTIwY29kZSUyMHRvJTIwbG9nJTIwaW4uJTIwVHVybmluZyUyMG9uJTIwdGhlJTIwbG9naW4lMjB2ZXJpZmljYXRpb24lMjBjb2RlJTIwY2FuJTIwZmFjaWxpdGF0ZSUyMGh1bWFuLW1hY2hpbmUlMjB2ZXJpZmljYXRpb24lMjBhbmQlMjBlZmZlY3RpdmVseSUyMHByZXZlbnQlMjBtYWxpY2lvdXMlMjBjcmFja2luZy4lMjBQYXNzd29yZCUyMHN0cmVuZ3RoJTIwc3VwcG9ydHMlMjBub3JtYWwlMkMlMjBtZWRpdW0lMjBhbmQlMjBoaWdoJTIwcGFzc3dvcmQlMjBzdHJlbmd0aCUyMGNvbWJpbmF0aW9ucyUyMGZvciUyMGFkbWluaXN0cmF0b3JzJTIwdG8lMjBjaG9vc2UlMjBhbmQlMjBzZXQlMkMlMjB3aGljaCUyMGNhbiUyMGVmZmVjdGl2ZWx5JTIwcHJldmVudCUyMHdlYWslMjBwYXNzd29yZHMlMjBhbmQlMjBwYXNzd29yZCUyMGxvY2tzLiUyMEFmdGVyJTIwNSUyMGNvbnNlY3V0aXZlJTIwaW5jb3JyZWN0JTIwcGFzc3dvcmQlMjBlbnRyaWVzJTJDJTIwdGhlJTIwYWNjb3VudCUyMHdpbGwlMjBlbnRlciUyMHRoZSUyMGxvY2slMjBzdGFnZSUyMHRvJTIwcHJldmVudCUyMGJydXRlJTIwZm9yY2UlMjBjcmFja2luZy4lMjBDU1JGJTIwUHJvdGVjdGlvbiUyMENTUkYlMjAoQ3Jvc3Mtc2l0ZSUyMHJlcXVlc3QlMjBmb3JnZXJ5KSUyMHJlZmVycyUyMHRvJTIwY3Jvc3Mtc2l0ZSUyMHJlcXVlc3QlMjBmb3JnZXJ5JTJDJTIwYWxzbyUyMGtub3duJTIwYXMlMjAlNUMlMjJPbmUlMjBDbGljayUyMEF0dGFjayU1QyUyMiUyMG9yJTIwU2Vzc2lvbiUyMFJpZGluZyUyQyUyMHdoaWNoJTIwZXhwbG9pdHMlMjB0cnVzdGVkJTIwd2Vic2l0ZXMlMjBieSUyMGRpc2d1aXNpbmclMjByZXF1ZXN0cyUyMGZyb20lMjB0cnVzdGVkJTIwdXNlcnMuJTIwS2VkYW8lMjBDbG91ZCUyMHByb3ZpZGVzJTIwYSUyMENTUkYlMjBwcm90ZWN0aW9uJTIwc3dpdGNoLiUyMFR1cm5pbmclMjBvbiUyMHRoZSUyMENTUkYlMjBwcm90ZWN0aW9uJTIwZnVuY3Rpb24lMjBjYW4lMjBoZWxwJTIwdXNlcnMlMjBlZmZlY3RpdmVseSUyMHByZXZlbnQlMjBtb3N0JTIwb2YlMjB0aGVzZSUyMGF0dGFja3MuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJ0c2EybTdxMjQwSTMlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJNNkdpS2xtSzdaWDYlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMmlsbHVzdHJhdGUlM0ElMjAlMjBBZnRlciUyMHR1cm5pbmclMjBvbiUyMENTUkYlMjBwcm90ZWN0aW9uJTJDJTIwaWYlMjBhJTIwc3lzdGVtJTIwZXJyb3IlMjBpcyUyMGRpc3BsYXllZCUyMGFuZCUyMHRoZSUyMHByb21wdCUyMCU1QyUyMnRva2VuX2Vycm9yJTVDJTIyJTIwaXMlMjBkaXNwbGF5ZWQlMkMlMjBpdCUyMG1lYW5zJTIwdGhhdCUyMHRoZXJlJTIwaXMlMjBhJTIwcHJvYmxlbSUyMHdpdGglMjB0aGUlMjBzZXJ2ZXIlMjBjb25maWd1cmF0aW9uLiUyMFBsZWFzZSUyMHRyeSUyMHRvJTIwY29uZmlndXJlJTIwdGhlJTIwc2VydmVyJTIwc2VjdXJpdHklMjBwb2xpY3klMjB0byUyMHN1cHBvcnQlMjBhbnRpLUNTUkYlMjBhdHRhY2tzLiUyMFlvdSUyMGNhbiUyMGNob29zZSUyMHRvJTIwdGVtcG9yYXJpbHklMjB0dXJuJTIwb2ZmJTIwdGhlJTIwQ1NSRiUyMHByb3RlY3Rpb24lMjBmdW5jdGlvbiUyMGluJTIwdGhlJTIwc3lzdGVtJTIwc2V0dGluZ3MlMjBiZWZvcmUlMjB1c2luZyUyMGl0LiUyMEluJTIwdGhpcyUyMGNhc2UlMkMlMjBwbGVhc2UlMjBwYXklMjBhdHRlbnRpb24lMjB0byUyMHRoZSUyMHNlY3VyaXR5JTIwcmlza3MuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJtYXJrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmJvbGQlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIybWFyayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJjb2xvciUyMiUyQyUyMmRhdGElMjIlM0ElN0IlMjJiYWNrZ3JvdW5kJTIyJTNBJTIycHVycGxlJTIyJTJDJTIydGV4dCUyMiUzQSUyMmRlZmF1bHQlMjIlN0QlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJtYXJrJTIyJTJDJTIydHlwZSUyMiUzQSUyMml0YWxpYyUyMiUyQyUyMmRhdGElMjIlM0ElN0IlN0QlN0QlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJUOFNZYWEyRXJuczYlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI1aGpyODJISkdsVHQlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMlJvb3QlMjBEaXJlY3RvcnklMjBBY2Nlc3MlMjBBZnRlciUyMGVuYWJsaW5nJTIwcm9vdCUyMGRpcmVjdG9yeSUyMHBlcm1pc3Npb25zJTJDJTIwYWRtaW5pc3RyYXRvcnMlMjBjYW4lMjBlbnRlciUyMHRoZSUyMHBoeXNpY2FsJTIwcGF0aCUyMGluJTIwdGhlJTIwS2VEYW8lMjBDbG91ZCUyMGFkZHJlc3MlMjBiYXIlMjB0byUyMGFjY2VzcyUyMGFsbCUyMGRpcmVjdG9yaWVzJTIwb24lMjBvdGhlciUyMHNlcnZlcnMuJTIwWW91JTIwY2FuJTIwc3dpdGNoJTIwZGlyZWN0b3JpZXMlMjB0aHJvdWdoJTIwdGhlJTIwYWRkcmVzcyUyMGJhciUyQyUyMG9yJTIwZGlyZWN0bHklMjBlbnRlciUyMG90aGVyJTIwZGlza3MlMjAoZm9yJTIwZXhhbXBsZSUyQyUyMGVudGVyJTIwQyUzQSUyRiUyMHRvJTIwZW50ZXIlMjB0aGUlMjBzeXN0ZW0lMjBDJTIwZHJpdmUpJTJDJTIwc28lMjB0aGF0JTIwYWRtaW5pc3RyYXRvcnMlMjBjYW4lMjBtb3JlJTIwY29udmVuaWVudGx5JTIwbWFuYWdlJTIwb3RoZXIlMjBmaWxlcyUyMG9uJTIwdGhlJTIwc2VydmVyLiUyMENvbnZlcnNlbHklMkMlMjBhZnRlciUyMGRpc2FibGluZyUyMHBlcm1pc3Npb25zJTJDJTIwYWRtaW5pc3RyYXRvcnMlMjBjYW4lMjBvbmx5JTIwYWNjZXNzJTIwdGhlJTIwZGlyZWN0b3J5JTIwd2hlcmUlMjBLZURhbyUyMENsb3VkJTIwaXMlMjBsb2NhdGVkLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyMmR3d05MT2QzM1gxJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyQkpVbnk2bG5EbUJPJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJpbGx1c3RyYXRlJTNBJTIwJTIwR2l2ZW4lMjB0aGF0JTIwdGhlJTIwcm9vdCUyMGRpcmVjdG9yeSUyMGhhcyUyMGV4dGVuc2l2ZSUyMHBlcm1pc3Npb25zJTJDJTIwaXQlMjBpcyUyMHJlY29tbWVuZGVkJTIwdGhhdCUyMGFkbWluaXN0cmF0b3JzJTIwbWFrZSUyMGElMjBjb21wcmVoZW5zaXZlJTIwYW5kJTIwcHJ1ZGVudCUyMGFzc2Vzc21lbnQlMjBiYXNlZCUyMG9uJTIwc2VjdXJpdHklMjBhbmQlMjBtYW5hZ2VtZW50JTIwY29udmVuaWVuY2UlMkMlMjBjb25maWd1cmUlMjB0aGUlMjBkaXJlY3RvcnklMjBhY2NvcmRpbmclMjB0byUyMHRoZWlyJTIwYWN0dWFsJTIwbmVlZHMlMkMlMjBhbmQlMjBkZWNpZGUlMjB3aGV0aGVyJTIwdG8lMjBlbmFibGUlMjB0aGUlMjByb290JTIwZGlyZWN0b3J5JTIwYWNjZXNzJTIwZnVuY3Rpb24lMjBieSUyMG1vZGlmeWluZyUyMHRoZSUyMFBIUCUyMGNyb3NzLXNpdGUlMjBwcm90ZWN0aW9uJTIwb3Blbl9iYXNlZGlyJTIwcGFyYW1ldGVyLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybWFyayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJib2xkJTIyJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMm1hcmslMjIlMkMlMjJ0eXBlJTIyJTNBJTIyY29sb3IlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTIyYmFja2dyb3VuZCUyMiUzQSUyMnB1cnBsZSUyMiUyQyUyMnRleHQlMjIlM0ElMjJkZWZhdWx0JTIyJTdEJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIybWFyayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJpdGFsaWMlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTdEJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyZzhkTndJOHU2RmNhJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyTW9CbTlYNGpXUnZrJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJGaWxlJTIwc3RvcmFnZSUyMGVuY3J5cHRpb24lMjBLZWRhbyUyMENsb3VkJTIwcmVtb3ZlcyUyMHRoZSUyMHN1ZmZpeCUyMG1ldGFkYXRhJTIwb2YlMjB1cGxvYWRlZCUyMGZpbGVzJTIwZm9yJTIwZW5jcnlwdGVkJTIwc3RvcmFnZSUyMHRvJTIwYXZvaWQlMjBiZWluZyUyMGF0dGFja2VkJTIwYnklMjB1cGxvYWRlZCUyMFRyb2phbiUyMGZpbGVzJTIwJTJDJTIwYW5kJTIwY2FuJTIwZWZmZWN0aXZlbHklMjBwcmV2ZW50JTIwcmFuc29td2FyZSUyMGRhbWFnZSUyMC4lMjBBZnRlciUyMGVuY3J5cHRpbmclMjBhbmQlMjB1bmlmb3JtbHklMjBzdG9yaW5nJTIwdXBsb2FkZWQlMjBmaWxlcyUyQyUyMGl0JTIwY2FuJTIwYWxzbyUyMHByZXZlbnQlMjBtYWxpY2lvdXMlMjB1c2VycyUyMGZyb20lMjBkaXJlY3RseSUyMG9idGFpbmluZyUyMGZpbGVzJTIwZnJvbSUyMHRoZSUyMGRpc2slMjBiYXNlZCUyMG9uJTIwdGhlJTIwZGlyZWN0b3J5JTIwb3IlMjBmaWxlJTIwbmFtZSUyQyUyMHdoaWNoJTIwaXMlMjBjb25kdWNpdmUlMjB0byUyMHRoZSUyMGNvbXBhbnkncyUyMGludGVybmFsJTIwY29udHJvbCUyMHdvcmsuJTIwRnVsbCUyMGVuY3J5cHRpb24lM0ElMjBFdmVuJTIwaWYlMjB5b3UlMjBoYXZlJTIwc2VydmVyJTIwcGVybWlzc2lvbnMlMkMlMjB5b3UlMjBjYW5ub3QlMjBrbm93JTIwdGhlJTIwdHJ1ZSUyMGNvbnRlbnQlMjBvZiUyMHRoZSUyMGZpbGUlM0IlMjBpdCUyMGNhbiUyMGVmZmVjdGl2ZWx5JTIwcHJldmVudCUyMGRhbWFnZSUyMHN1Y2glMjBhcyUyMHJhbnNvbXdhcmUlMjBhbmQlMjB2aXJ1c2VzJTNCJTIwS2VlcCUyMGV4dGVuc2lvbiUzQSUyMEVuY3J5cHQlMjB0aGUlMjBmaWxlJTIwbmFtZSUyMGFuZCUyMGtlZXAlMjB0aGUlMjBmaWxlJTIwZXh0ZW5zaW9uJTNCJTIwTm8lMjBlbmNyeXB0aW9uJTNBJTIwRG8lMjBub3QlMjBlbmNyeXB0JTIwdGhlJTIwZmlsZSUyMG5hbWUlMjBhbmQlMjBrZWVwJTIwdGhlJTIwb3JpZ2luYWwlMjBmaWxlJTIwbmFtZSUzQiUyMChUbyUyMGVuc3VyZSUyMHNlY3VyaXR5JTJDJTIwdGhlJTIwdXBsb2FkZWQlMjBmb2xkZXIlMjBuYW1lJTIwaXMlMjBlbmNyeXB0ZWQpJTIwQnklMjBkZWZhdWx0JTJDJTIwS2VkYW8lMjBDbG91ZCUyMHVzZXMlMjBmdWxsJTIwZW5jcnlwdGlvbiUyMGZvciUyMHN0b3JhZ2UlMjAoc3Ryb25nbHklMjByZWNvbW1lbmRlZCkuJTIwQWRtaW5pc3RyYXRvcnMlMjBjYW4lMjBhbHNvJTIwc2V0JTIwaXQlMjB1cCUyMGJhc2VkJTIwb24lMjB0aGUlMjB2aXNpYmlsaXR5JTIwcmVxdWlyZW1lbnRzJTIwb2YlMjB0aGUlMjBiYWNrZW5kJTIwZGF0YS4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMms5WktYdlNyenAzNSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnRMUEk1WXprellZZCUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyMS4yLjMlMjBVc2VyJTIwcmVnaXN0cmF0aW9uJTIwYW5kJTIwcXVpY2slMjBUaGlyZC1wYXJ0eSUyMGxvZ2luJTIwSW4lMjBvcmRlciUyMHRvJTIwZmFjaWxpdGF0ZSUyMHVzZXJzJTIwdG8lMjByZWdpc3RlciUyMGFuZCUyMGxvZyUyMGluJTIwbW9yZSUyMGNvbnZlbmllbnRseSUyQyUyMEtlZGFvJTIwQ2xvdWQlMjBoYXMlMjBpbnRlZ3JhdGVkJTIwdGhpcmQtcGFydHklMjBsb2dpbiUyMG1vZHVsZXMlMjBzdWNoJTIwYXMlMjBXZUNoYXQlMkMlMjBRUSUyQyUyMEdpdGh1YiUyQyUyMGV0Yy4lMjBBZG1pbmlzdHJhdG9ycyUyMGNhbiUyMGNoZWNrJTIwdGhlJTIwc2hvcnRjdXQlMjBsb2dpbiUyMG1ldGhvZCUyMGFsbG93ZWQlMjBmb3IlMjB1c2Vycy4lMjBFbmFibGUlMjB1c2VyJTIwcmVnaXN0cmF0aW9uLiUyMEFmdGVyJTIwZW5hYmxpbmclMjB0aGlzJTIwZnVuY3Rpb24lMkMlMjB1c2VycyUyMGNhbiUyMHNlbGYtcmVnaXN0ZXIlMjBvbiUyMHRoZSUyMHN5c3RlbSUyMGxvZ2luJTIwcGFnZSUyMHRocm91Z2glMjB2YXJpb3VzJTIwbW9kZXMlMjBzdWNoJTIwYXMlMjBxdWljayUyMGxvZ2luJTIwcmVnaXN0cmF0aW9uJTJDJTIwZW1haWwlMjByZWdpc3RyYXRpb24lMkMlMjBhbmQlMjBtb2JpbGUlMjBwaG9uZSUyMHJlZ2lzdHJhdGlvbi4lMjBFbmFibGUlMjByZWdpc3RyYXRpb24lMjByZXZpZXclMjBBZnRlciUyMGVuYWJsaW5nJTIwdGhpcyUyMGZ1bmN0aW9uJTJDJTIwdXNlcnMlMjB3aG8lMjByZWdpc3RlciUyMGJ5JTIwdGhlbXNlbHZlcyUyMGNhbiUyMGFjdGl2YXRlJTIwdGhlaXIlMjBhY2NvdW50cyUyMGFuZCUyMGxvZyUyMGluJTIwbm9ybWFsbHklMjBvbmx5JTIwYWZ0ZXIlMjBwYXNzaW5nJTIwdGhlJTIwcmV2aWV3JTIwb2YlMjB0aGUlMjBhZG1pbmlzdHJhdG9yLiUyMERlZmF1bHQlMjBzZXR0aW5ncyUyMGZvciUyMHJlZ2lzdGVyZWQlMjB1c2VycyUyMEFkbWluaXN0cmF0b3JzJTIwY2FuJTIwc2V0JTIwdGhlJTIwZGVmYXVsdCUyMHNwYWNlJTIwc2l6ZSUyMGZvciUyMHNlbGYtcmVnaXN0ZXJlZCUyMHVzZXJzJTJDJTIwdGhlJTIwdHlwZSUyMG9mJTIwcGVybWlzc2lvbiUyMHJvbGUlMjBncm91cCUyMHRoZXklMjBiZWxvbmclMjB0byUyQyUyMHRoZSUyMGRlcGFydG1lbnQlMjB0aGV5JTIwYXJlJTIwaW4lMkMlMjBhbmQlMjB0aGUlMjBjb3JyZXNwb25kaW5nJTIwcGVybWlzc2lvbnMuJTIwMS4yLjQlMjBVcGxvYWQlMjBhbmQlMjBkb3dubG9hZCUyMHNldHRpbmdzJTIwYW5kJTIwVXBsb2FkJTIwc3BlZWQlMjBvcHRpbWl6YXRpb24lMjBBZG1pbmlzdHJhdG9ycyUyMGNhbiUyMHNldCUyMHBhcmFtZXRlcnMlMjBzdWNoJTIwYXMlMjB1cGxvYWQlMjBzZWdtZW50JTIwc2l6ZSUyMGFuZCUyMGNvbmN1cnJlbnQlMjB0aHJlYWRzJTIwdG8lMjBvcHRpbWl6ZSUyMHRoZSUyMHVwbG9hZCUyMHNwZWVkLiUyMFVwbG9hZCUyMFNldHRpbmdzJTIwWW91JTIwY2FuJTIwc2V0JTIwdGhlJTIwbnVtYmVyJTIwb2YlMjBhdXRvbWF0aWMlMjByZXRyYW5zbWlzc2lvbnMlMjB3aGVuJTIwdGhlJTIwdXBsb2FkJTIwZmFpbHMlMkMlMjB0aGUlMjBudW1iZXIlMjBvZiUyMGZpbGVzJTIwdG8lMjBiZSUyMGlnbm9yZWQlMjBkdXJpbmclMjB1cGxvYWQlMkMlMjBhbmQlMjBvdGhlciUyMGl0ZW1zLiUyMERvd25sb2FkJTIwc3BlZWQlMjBsaW1pdCUzQSUyMExpbWl0JTIwdGhlJTIwZG93bmxvYWQlMjBzcGVlZC4lMjBGb3IlMjB3ZWJzaXRlcyUyMHdpdGglMjBsYXJnZSUyMGNvbmN1cnJlbmN5JTJDJTIwYSUyMHVuaWZpZWQlMjBzcGVlZCUyMGxpbWl0JTIwY2FuJTIwYmUlMjBzZXQuJTIwRXh0ZXJuYWwlMjBsaW5rJTIwc2hhcmluZyUyMGFuZCUyMHBhY2thZ2UlMjBkb3dubG9hZGluZyUyMEV4dGVybmFsJTIwbGluayUyMHNoYXJpbmclMjBmb2xkZXJzJTIwc3VwcG9ydCUyMHBhY2thZ2UlMjBjb21wcmVzc2lvbiUyMGRvd25sb2FkaW5nLiUyMExhcmdlJTIwY29uY3VycmVudCUyMGRvd25sb2FkaW5nJTIwd2lsbCUyMG9jY3VweSUyMHNlcnZlciUyMHBlcmZvcm1hbmNlVXBsb2FkJTIwYW5kJTIwZG93bmxvYWQlMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMlFsajlvWDVHYzYwOSUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMjNQWGFBQlRpSmVpZSUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyaGludCUzQSUyMCUyMFVwbG9hZCUyMGFuZCUyMGRvd25sb2FkJTIwYXJlJTIwZm9yJTIwdXNlcnMlMjB0byUyMGRlcGxveSUyMGFuZCUyMGNvbmZpZ3VyZSUyMGJ5JTIwdGhlbXNlbHZlcy4lMjBGb3IlMjB0aG9zZSUyMHdobyUyMG5lZWQlMjB0byUyMG9wdGltaXplJTIwdGhlJTIwdHJhbnNtaXNzaW9uJTIwcmF0ZSUyQyUyMHBsZWFzZSUyMHJlZmVyJTIwdG8lMjB0aGUlMjBjb25maWd1cmF0aW9uJTIwb3B0aW1pemF0aW9uJTIwZG9jdW1lbnQlMjAlMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMm1hcmslMjIlMkMlMjJ0eXBlJTIyJTNBJTIyYm9sZCUyMiUyQyUyMmRhdGElMjIlM0ElN0IlN0QlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJtYXJrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmNvbG9yJTIyJTJDJTIyZGF0YSUyMiUzQSU3QiUyMmJhY2tncm91bmQlMjIlM0ElMjJwdXJwbGUlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyZGVmYXVsdCUyMiU3RCU3RCU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMjFUY2RoU1RHMVJ3QyUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmZNbHhDSTE1dmhCdSUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyMS4yLjUlMjBFbWFpbCUyMFRoZSUyMG1haWxib3glMjBzZXJ2ZXIlMjBjYW4lMjBiZSUyMHVzZWQlMjBmb3IlMjB1c2VyJTIwcmVnaXN0cmF0aW9uJTJDJTIwcGFzc3dvcmQlMjByZXRyaWV2YWwlMkMlMjBzeXN0ZW0lMjBub3RpZmljYXRpb25zJTJDJTIwZXRjLiUyMiUyQyUyMm1hcmtzJTIyJTNBJTVCJTVEJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyc0k3ZnV0d0w3MWJpJTIyJTdEJTVEJTJDJTIya2V5JTIyJTNBJTIyTTI5aGI2dXZIeDlnJTIyJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIyYmxvY2slMjIlMkMlMjJ0eXBlJTIyJTNBJTIycGFyYWdyYXBoJTIyJTJDJTIyaXNWb2lkJTIyJTNBZmFsc2UlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTJDJTIybm9kZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJ0ZXh0JTIyJTJDJTIybGVhdmVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIybGVhZiUyMiUyQyUyMnRleHQlMjIlM0ElMjJCeSUyMGRlZmF1bHQlMkMlMjB0aGUlMjBzeXN0ZW0lMjB1c2VzJTIwdGhlJTIwbWFpbCUyMHNlcnZlciUyMG9mZmljaWFsbHklMjBwcm92aWRlZCUyMGJ5JTIwS2VkYW95dW4lMjB0byUyMHNlbmQlMjBtYWlsJTIwdG8lMjB1c2Vycy4lMjBBZnRlciUyMHRoZSUyMGFkbWluaXN0cmF0b3IlMjBjb25maWd1cmVzJTIwdGhlJTIwbWFpbCUyMHNlcnZlciUyQyUyMHVzZSUyMHRoZSUyMGN1c3RvbWl6ZWQlMjBtYWlsJTIwc2VydmljZSUyMHRvJTIwc2VuZCUyMHN5c3RlbSUyMGluZm9ybWF0aW9uJTIwMS4yLjYlMjBXZWJzaXRlJTIwcmVnaXN0cmF0aW9uJTIwbnVtYmVyJTJGb3RoZXIlMjBJbiUyMCU1QyUyMlN5c3RlbSUyMFNldHRpbmdzJTVDJTIyJTIwJTNFJTIwJTVDJTIyQmFzaWMlMjBTZXR0aW5ncyU1QyUyMiUyMCUzRSUyMCU1QyUyMk90aGVyJTIwU2V0dGluZ3MlNUMlMjIlMjAlMkMlMjB5b3UlMjBjYW4lMjBjdXN0b21pemUlMjB0aGUlMjB3ZWJzaXRlJTIwcmVnaXN0cmF0aW9uJTIwbnVtYmVyJTIwaW5mb3JtYXRpb24uJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJCWXI1QUZZRkVCaW0lMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJReDhqbWp2b2c5RE0lMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMkNsZWFyJTIwY2FjaGUlMjBDbGlja2luZyUyMHRoaXMlMjBvcGVyYXRpb24lMjB3aWxsJTIwY2xlYXIlMjB0aGUlMjBjYWNoZSUyMGluJTIwc3lzdGVtJTIwdGVtcG9yYXJ5JTIwZGlyZWN0b3JpZXMlMjBzdWNoJTIwYXMlMjBkYXRhJTJGdGVtcC4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMmZsMHF4NGZDTFNmeiUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkMxUHMzUG9QWlJqNCUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyJTIwaWxsdXN0cmF0ZSUzQSUyMCUyMEFmdGVyJTIwcGVyZm9ybWluZyUyMHRoaXMlMjBvcGVyYXRpb24lMkMlMjB0aGUlMjBwcmV2aWV3JTIwc2VydmVyJTIwY2FjaGUlMjBvZiUyMEF1dG9DQUQlMjBhbmQlMjBvdGhlciUyMGZvcm1hdCUyMGZpbGVzJTIwd2lsbCUyMGFsc28lMjBiZSUyMGNsZWFyZWQlMkMlMjB3aGljaCUyMG1heSUyMGFmZmVjdCUyMHRoZSUyMHByZXZpZXclMjBzcGVlZC4lMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMm1hcmslMjIlMkMlMjJ0eXBlJTIyJTNBJTIyYm9sZCUyMiUyQyUyMmRhdGElMjIlM0ElN0IlN0QlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJtYXJrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmNvbG9yJTIyJTJDJTIyZGF0YSUyMiUzQSU3QiUyMmJhY2tncm91bmQlMjIlM0ElMjJwdXJwbGUlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyZGVmYXVsdCUyMiU3RCU3RCU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMkFKRTNDcmFuOWhlcyUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMm1TeDdhbTZvVE9SMyUyMiU3RCUyQyU3QiUyMm9iamVjdCUyMiUzQSUyMmJsb2NrJTIyJTJDJTIydHlwZSUyMiUzQSUyMnBhcmFncmFwaCUyMiUyQyUyMmlzVm9pZCUyMiUzQWZhbHNlJTJDJTIyZGF0YSUyMiUzQSU3QiU3RCUyQyUyMm5vZGVzJTIyJTNBJTVCJTdCJTIyb2JqZWN0JTIyJTNBJTIydGV4dCUyMiUyQyUyMmxlYXZlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMmxlYWYlMjIlMkMlMjJ0ZXh0JTIyJTNBJTIyQ3VzdG9taXppbmclMjBnbG9iYWwlMjBDU1MlMjBwcm92aWRlcyUyMHBvd2VyZnVsJTIwZXh0ZW5zaWJpbGl0eS4lMjBBZG1pbmlzdHJhdG9ycyUyMGNhbiUyMGN1c3RvbWl6ZSUyMGZ1bmN0aW9ucyUyMGluY2x1ZGluZyUyMGJ1dCUyMG5vdCUyMGxpbWl0ZWQlMjB0byUyMHRoZSUyMGZvbGxvd2luZyUzQSUyMFJlbW92ZSUyMHJhbmRvbSUyMGRlc2t0b3AlMjB3YWxscGFwZXJzJTIwT25seSUyMENoaW5lc2UlMjBpcyUyMHJldGFpbmVkJTIwaW4lMjBtdWx0aXBsZSUyMGxhbmd1YWdlcyUyMEN1c3RvbWl6ZSUyMHRoZSUyMHVzZXIlMjBkZXNrdG9wJTIwZm9sZGVyJTIwZGlyZWN0b3J5JTIwQ29uZmlndXJlJTIwdGhlJTIwc3RhdGljJTIwZmlsZSUyMENETiUyMGFjY2VzcyUyMFVSTCUyMENvbmZpZ3VyZSUyMHBsdWdpbiUyMHN0YXRpYyUyMGZpbGVzJTIwdG8lMjBDRE4lMjAuJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJIWHAxQUNGNXI4ZGklMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI3SlY0NFNtMEdqY0IlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMmlsbHVzdHJhdGUlM0ElMjAlMjBGb3IlMjBtb3JlJTIwY3VzdG9taXphdGlvbiUyMHJlcXVpcmVtZW50cyUyQyUyMHBsZWFzZSUyMHJlZmVyJTIwdG8lMjB0aGUlMjBBUEklMjBkb2N1bWVudGF0aW9uJTIyJTJDJTIybWFya3MlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJtYXJrJTIyJTJDJTIydHlwZSUyMiUzQSUyMmJvbGQlMjIlMkMlMjJkYXRhJTIyJTNBJTdCJTdEJTdEJTJDJTdCJTIyb2JqZWN0JTIyJTNBJTIybWFyayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJjb2xvciUyMiUyQyUyMmRhdGElMjIlM0ElN0IlMjJiYWNrZ3JvdW5kJTIyJTNBJTIycHVycGxlJTIyJTJDJTIydGV4dCUyMiUzQSUyMmRlZmF1bHQlMjIlN0QlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJtYXJrJTIyJTJDJTIydHlwZSUyMiUzQSUyMml0YWxpYyUyMiUyQyUyMmRhdGElMjIlM0ElN0IlN0QlN0QlNUQlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjI3VjVZT0ptQ2NlZUwlMjIlN0QlNUQlMkMlMjJrZXklMjIlM0ElMjJSbllEajdla0Vrc2UlMjIlN0QlMkMlN0IlMjJvYmplY3QlMjIlM0ElMjJibG9jayUyMiUyQyUyMnR5cGUlMjIlM0ElMjJwYXJhZ3JhcGglMjIlMkMlMjJpc1ZvaWQlMjIlM0FmYWxzZSUyQyUyMmRhdGElMjIlM0ElN0IlN0QlMkMlMjJub2RlcyUyMiUzQSU1QiU3QiUyMm9iamVjdCUyMiUzQSUyMnRleHQlMjIlMkMlMjJsZWF2ZXMlMjIlM0ElNUIlN0IlMjJvYmplY3QlMjIlM0ElMjJsZWFmJTIyJTJDJTIydGV4dCUyMiUzQSUyMlN0YXRpc3RpY3MlMjBjb2RlJTIwYWRkcyUyMHRoaXJkLXBhcnR5JTIwc3RhdGlzdGljcyUyMGNvZGUlMjB0byUyMHRoZSUyMHdlYnNpdGUlMjIlMkMlMjJtYXJrcyUyMiUzQSU1QiU1RCU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMjBxcDNjNk51VDhtaiUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMnI2WHhDNkhESFdrRCUyMiU3RCU1RCUyQyUyMmtleSUyMiUzQSUyMjJjU2hFbzBlVFJQdyUyMiU3RA==" id="bkmrk-statistics-code-adds">
<div class="page-block-swagger:ml-0 relative mx-auto w-full max-w-[--block-wrapper-max-width]" node="r6XxC6HDHWkD">
<div class="css-175oi2r">
<div data-key="r6XxC6HDHWkD" class="relative flex py-4 pt-2 pb-2 _dropHorizontal_2u9k6_23">
<div data-block-content="r6XxC6HDHWkD" class="relative flex-1"><span class="select-text text-left text-content-paragraph"><span data-key="0qp3c6NuT8mj"><span data-offset-key="0qp3c6NuT8mj:0">Statistics code adds third-party statistics code to the website</span></span></span></div>
</div>
</div>
</div>
</div>                
</div>
</body>
</html>