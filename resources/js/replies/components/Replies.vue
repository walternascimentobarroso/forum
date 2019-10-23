<template>
  <div>
    <div class="card">
      <div class="card-content">
        <span class="card-title">Walter {{ replied }}</span>

        <blockquote>Laboriosam magnam vel dolorem tempore sed quas. Quod sint illum rerum adipisci molestias. Eaque est ut dignissimos natus laboriosam et. Dolores fuga assumenda sed similique placeat id. Sequi consequatur assumenda fuga sapiente. Praesentium nihil maxime voluptatum eum ut tempore at. Id voluptatem nostrum porro perspiciatis cum at suscipit voluptas. Accusamus ex vel voluptate. Accusamus ipsa quam non accusantium est quo earum. Voluptatem tenetur ullam quo.</blockquote>
      </div>
    </div>

    <div class="card">
      <div class="card-content">
        <span class="card-title">Walter {{ replied }}</span>

        <blockquote>Laboriosam magnam vel dolorem tempore sed quas. Quod sint illum rerum adipisci molestias. Eaque est ut dignissimos natus laboriosam et. Dolores fuga assumenda sed similique placeat id. Sequi consequatur assumenda fuga sapiente. Praesentium nihil maxime voluptatum eum ut tempore at. Id voluptatem nostrum porro perspiciatis cum at suscipit voluptas. Accusamus ex vel voluptate. Accusamus ipsa quam non accusantium est quo earum. Voluptatem tenetur ullam quo.</blockquote>
      </div>
    </div>

    <div class="card">
      <div class="card-content">
        <span class="card-title">Walter {{ replied }}</span>

        <blockquote>Laboriosam magnam vel dolorem tempore sed quas. Quod sint illum rerum adipisci molestias. Eaque est ut dignissimos natus laboriosam et. Dolores fuga assumenda sed similique placeat id. Sequi consequatur assumenda fuga sapiente. Praesentium nihil maxime voluptatum eum ut tempore at. Id voluptatem nostrum porro perspiciatis cum at suscipit voluptas. Accusamus ex vel voluptate. Accusamus ipsa quam non accusantium est quo earum. Voluptatem tenetur ullam quo.</blockquote>
      </div>
    </div>

    <div class="card grey lighten-4">
      <div class="card-content">
        <span class="card-title">{{ reply }}</span>

        <form action>
          <div class="input-field">
            <textarea rows="10" class="materialize-textarea" :placeholder="yourAnswer"></textarea>
          </div>

          <button type="submit" class="btn reb accent-2">{{ send }}</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["replied", "reply", "yourAnswer", "send"]
};
</script>
