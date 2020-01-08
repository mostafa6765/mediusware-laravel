<template>
    <div class="">
      <div class="row">
          <div class="col-md-12">
            <table class="table table-hover social-accounts">
              <thead>
                <tr>
                  <th>Gropu Name</th>
                  <th>Group Type</th>
                  <th>Account Name</th>
                  <th>Post Text</th>
                  <th>Time</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="post in posts">
                    <td>{{post.id}}</td>
                    <td>{{post.group_info.type}}</td>
                    <td></th>
                    <td>{{post.post_text}}</td>
                    <td>{{post.created_at}}</td>
                </tr>



              </tbody>
            </table>
            <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item" v-for="(i,lastpage) in lastpages"  :key="lastpage"><a class="page-link" href="#">{{i}}</a></li>

    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
      data () {
        return {
          posts: [],
          lastpages: ''
        }
      },
        mounted() {
            axios.get('history/get').then((response)=>{
              this.posts = response.data.data
              this.lastpages = response.data.last_page
              console.log(this.lastpages)
            })
        }
    }
</script>
