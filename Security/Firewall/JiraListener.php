<?php

namespace CanalTP\ScrumBoardItBundle\Security\Firewall;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Firewall\AbstractAuthenticationListener;
use CanalTP\ScrumBoardItBundle\Security\Authentification\Token\JiraToken;

/**
 * Jira listener.
 */
class JiraListener extends AbstractAuthenticationListener
{
    protected function attemptAuthentication(Request $request)
    {
        if ($this->options['post_only'] && 'post' !== strtolower($request->getMethod())) {
            if (null !== $this->logger) {
                $this->logger->debug(sprintf('Authentication method not supported: %s.', $request->getMethod()));
            }

            return;
        }

        $username = trim($request->get($this->options['username_parameter'], null, true));
        $password = $request->get($this->options['password_parameter'], null, true);
        $token = new JiraToken($username, $password);
        $returnValue = $this->authenticationManager->authenticate($token);

        return $returnValue;
    }
}
