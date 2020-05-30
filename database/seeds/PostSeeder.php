<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sort = ["공지사항", "자유게시판", "프로그래밍", "게임"];
        $content = <<<EOT
# 마크다운 예제 1
이 문서는 [마크다운][1]으로 썼습니다. 화면에는 HTML로 변환되어 출력됩니다.
## 순서 없는 목록
- 첫 번째 항목
- 두 번째 항목[^1]
[1]: http://daringfireball.net/projects/markdown
[^1]: 두 번째 항목_ http://google.com 
EOT;
        for ($i = 0; $i <= 3; $i++) {
            for ($j = 0; $j <= 19; $j++) {
                $title = $j . ".번째 테스트 제목";

                $post = new Post();

                $post->email = "test@test.com";
                $post->title = $title;
                $post->sort = $sort[$i];
                $post->content = $content;

                $post->save();
            }
        }
    }
}
