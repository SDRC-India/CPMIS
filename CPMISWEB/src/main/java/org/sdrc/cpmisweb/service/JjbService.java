package org.sdrc.cpmisweb.service;

import org.sdrc.cpmisweb.model.JjbModel;
import org.springframework.stereotype.Service;

@Service
public interface JjbService {

	public abstract void save(JjbModel jjbModel);
	public abstract JjbModel findLastSavedData(Integer userId);
}
