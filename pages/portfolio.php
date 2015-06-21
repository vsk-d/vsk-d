<section class="aboutbox">
    <div class="aboutbox-header">Мои работы</div>
    <div class="aboutbox-body clearfix">
        <div class="projects-wrapper">
            <div class="projects-list">
                <?php foreach($projects as $project): ?>
                <li class="projects-item">
                    <div class="hover-img"><img src="img/work/<?php echo $project['thumb']; ?>" alt="<?php echo $project['link']; ?>" class="project-img">
                        <div class="zoom-wrapper"><a href="<?php echo $project['link']; ?>" target="_blank" class="zoom-link"><?php echo $project['title']; ?></a></div>
                    </div><a href="<?php echo $project['link']; ?>" target="_blank" class="project-link"><?php echo $project['title']; ?></a>
                    <div class="project-desc"><?php echo $project['description']; ?></div>
                </li>
                <?php endforeach; ?>
                <?php if(isset($_SESSION['auth']) && $_SESSION['auth'] == true): ?>
                <li class="projects-item add-new-item">
                    <a id="add-new-item" href="#" class="add-new-link">
                        <div class="add-new-text">Добавить проект</div>
                    </a>
                </li>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<div id="new-progect-popup">
    <div class="modal-wrapper">
        <div class="modal-header">
            <button type="button" class="b-close"></button>
            <h4 class="modal-title">Добавление проекта</h4></div>
        <div class="modal-body">
            <form id="add-new-project" role="form" class="form" method="post" enctype="multipart/form-data">
                <div class="server-mes error-mes"></div>
                <div class="server-mes success-mes"></div>
                <div class="form-group">
                    <label for="projectName" class="label">Название проекта</label>
                    <input id="projectName" name="projectName" type="text" placeholder="Введите название" qtip-content="Вы не ввели название" class="input">
                </div>
                <div class="form-group">
                    <div id="uploadfile" class="fileupload-wrapper"><span class="label">Картинка проекта</span>
                        <label class="fileupload-lable">
                            <input id="fileupload" type="file" name="files[]" class="fileupload">
                            <input id="fileurl" type="hidden" name="fileurl">
                        </label>
                        <input id="filename" type="text" name="filename" placeholder="Загрузите изображение" disabled qtip-content="Вы не выбрали изображение" class="input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="projectUrl" class="label">URL проекта</label>
                    <input id="projectUrl" name="projectUrl" type="text" placeholder="Добавьте ссылку" qtip-content="Вы не добавили ссылку" class="input">
                </div>
                <div class="form-group">
                    <label for="projectDesc" class="label">Описание</label>
                    <textarea id="projectDesc" name="text" rows="3" placeholder="Пара слов о вашем проекте" qtip-content="Описание проекта обязательно" class="textarea"></textarea>
                </div>
                <div class="btn-wrapp">
                    <button type="submit" class="btn">Добавить</button>
                </div>
            </form>
        </div>
    </div>
</div>