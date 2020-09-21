<template>
  <Layout>
    <div class="container-inner mx-auto my-16">
      <h2 class="text-4xl font-bold mb-8 border-b">
        Category: {{ $page.category.title }}
      </h2>

      <div
        v-for="post in $page.category.belongsTo.edges"
        :key="post.node.id"
        class="post border-gray-400 border-b mb-12"
      >
        <h2 class="text-3xl font-bold">
          <g-link :to="post.node.path" class="text-copy-primary">{{
            post.node.title
          }}</g-link>
        </h2>
        <div class="text-copy-secondary mb-4">
          <span>{{ post.node.date }}</span>
          <span> &middot; </span>
          <span>{{ post.node.timeToRead }} min read</span>
        </div>

        <div class="text-lg mb-4">
          {{ post.node.summary }}
        </div>

        <div class="mb-8">
          <g-link :to="post.node.path" class="font-bold uppercase"
            >Read More</g-link
          >
        </div>
      </div>

      <pagination-posts
        v-if="$page.category.belongsTo.pageInfo.totalPages > 1"
        :base="`/category/${$page.category.title}`"
        :totalPages="$page.category.belongsTo.pageInfo.totalPages"
        :currentPage="$page.category.belongsTo.pageInfo.currentPage"
      />
    </div>
  </Layout>
</template>

<page-query>
query Category ($id: ID!, $page: Int) {
  category: category (id: $id) {
    title
    belongsTo (page: $page, perPage: 3) @paginate {
      totalCount
      pageInfo {
        totalPages
        currentPage
      }
      edges {
        node {
          ...on Post {
            title
            timeToRead
    	      date (format: "MMMM D, YYYY")
            path
            summary
            categories {
              title
            }
          }
        }
      }
    }
  }
}
</page-query>

<script>
import PaginationPosts from "../components/PaginationPosts";

export default {
  metaInfo() {
    return {
      title: "Category: " + this.$page.category.title,
    };
  },
  components: {
    PaginationPosts,
  },
};
</script>
