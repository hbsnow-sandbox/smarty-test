{* variable *}
{assign var="val1" value="val1"}
<p>{$val1}</p>
<p>{WEEK_0}</p>
<p>{WEEK_1}</p>
{HTML_CODE}

{* if/else *}
{if ($val1 === "val1")}
  <p>同じ</p>
{else}
  <p>違うよ</p>
{/if}