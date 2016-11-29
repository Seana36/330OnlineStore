<html> 

            <div id="accordion" class="panel panel-primary behclick-panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Search Filter</h3>
                </div>
                <div class="panel-body" >
                    <div class="panel-heading " >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse0">
                                <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Price
                            </a>
                        </h4>
                    </div>
                    <form action ="filterController.php" method ="post">
                    <div id="collapse0" class="panel-collapse collapse in" >
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="1" name='filterControl' >
                                        0 - $100
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="radio" >
                                    <label>
                                        <input type="radio" value="2" name='filterControl'>
                                        $101 - $200
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="radio"  >
                                    <label>
                                        <input type="radio" value="3" name='filterControl'>
                                        $201 - $600
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="radio"  >
                                    <label>
                                        <input type="radio" value="4" name='filterControl'>
                                        More Than 601$
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body" >
                    <div class="panel-heading " >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse0">
                                <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Category
                            </a>
                        </h4>
                    </div>
                    <div id="collapse0" class="panel-collapse collapse in" >
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="Technology" name='category' >
                                        Technology
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="radio" >
                                    <label>
                                        <input type="radio" value="Fragrances" name='category'>
                                        Fragrances
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="radio"  >
                                    <label>
                                        <input type="radio" value="Fruit" name='category'>
                                        Fruit
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
        
            <input type="submit" value="Filter" class="btn btn-default">
              </form>
</html>