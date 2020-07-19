<?
// viewmodels/member/SignInViewModel.php
?>

<div class="d-flex justify-content-center">
    <form class="w-50 mt-5" method="post">
        <div>
            <h2>로그인</h2>
        </div>
        <div class="form-group">
            <label for="member_id">ID</label>
            <input type="text" class="form-control" id="member_id" name="member_id" placeholder="ID를 입력하세요." value="<?= $member_id ?>">
        </div>
        <div class="form-group">
            <label for="password">Passowrd</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="비밀번호를 입력하세요." value="<?= $password ?>">
        </div>
        <button type="submit" class="btn btn-block btn-primary">로그인</button>
    </form>
</div>