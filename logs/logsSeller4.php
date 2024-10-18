<?php include('../header_4.php'); ?>

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center ">
                        <div class="col ">
                            <div class="mt-4">
                                <h1 class="card-title float-left mt-2 text-center ">My Logs</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mt-5">
                    <div class="card-body mt-4">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
								    <th>#</th>
	    							<th>Username</th>
		    						<th>Activity</th>
			    					<th>Time Stamp</th>
					    		</tr>
						    </thead>
								<?php

                                $sql = "SELECT * FROM logs WHERE user_type = 'HypeBeast seller 4' ORDER BY id DESC";								
                                $result = $connforMyOnlineDb->query($sql);

								if ($result->num_rows > 0) {
									
                                    $count = 1;
									while ($row = $result->fetch_assoc()) {
                                        echo "</tr>";
										echo "<td>" . $count . "</td>";
										echo "<td>" . $row['username'] . "</td>";
										echo "<td>" . $row['action'] . "</td>";
										echo "<td>" . $row['timestamp'] . "</td>";
										echo "</tr>";

                                        $count++;
									}
								} else {
                                    
									echo "<tr><td colspan='8' class='text-center text-danger'>No results found</td></tr>"; // Updated colspan to match the number of <th> elements
								}

								$connforMyOnlineDb->close();
								?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include('../includes/footer.php'); ?>
<?php include('../includes/script.php'); ?>