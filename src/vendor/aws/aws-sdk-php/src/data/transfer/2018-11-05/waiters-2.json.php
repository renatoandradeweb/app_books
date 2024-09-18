<?php

// This file was auto-generated from sdk-root/src/data/transfer/2018-11-05/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'ServerOffline' => [ 'delay' => 30, 'maxAttempts' => 120, 'operation' => 'DescribeServer', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'Server.State', 'state' => 'success', 'expected' => 'OFFLINE', ], [ 'matcher' => 'path', 'argument' => 'Server.State', 'state' => 'failure', 'expected' => 'STOP_FAILED', ], ], ], 'ServerOnline' => [ 'delay' => 30, 'maxAttempts' => 120, 'operation' => 'DescribeServer', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'Server.State', 'state' => 'success', 'expected' => 'ONLINE', ], [ 'matcher' => 'path', 'argument' => 'Server.State', 'state' => 'failure', 'expected' => 'START_FAILED', ], ], ], ],];
